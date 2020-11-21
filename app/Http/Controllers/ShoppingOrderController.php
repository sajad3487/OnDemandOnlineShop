<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminOrderStatusRequest;
use App\Http\Requests\PayCartRequest;
use App\Service\QuotationService;
use App\Service\RequestService;
use App\Service\shoppingCartService;
use App\Service\shoppingOrderItemService;
use App\Service\shoppingOrderService;
use App\Service\UserService;
use Illuminate\Http\Request;

class ShoppingOrderController extends Controller
{
    /**
     * @var shoppingOrderService
     */
    private $shoppingOrderService;
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var shoppingCartService
     */
    private $shoppingCartService;
    /**
     * @var shoppingOrderItemService
     */
    private $shoppingOrderItemService;
    /**
     * @var RequestService
     */
    private $requestService;
    /**
     * @var QuotationService
     */
    private $quotationService;

    public function __construct(
        shoppingOrderService $shoppingOrderService,
        UserService $userService,
        shoppingCartService $shoppingCartService,
        shoppingOrderItemService $shoppingOrderItemService,
        QuotationService $quotationService,
        RequestService $requestService
    )
    {
        $this->shoppingOrderService = $shoppingOrderService;
        $this->userService = $userService;
        $this->shoppingCartService = $shoppingCartService;
        $this->shoppingOrderItemService = $shoppingOrderItemService;
        $this->quotationService = $quotationService;
        $this->requestService = $requestService;
    }

    public function index()
    {
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this->requestService->requestItemInCart();
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems($user_id);
        $orders = $this->shoppingOrderService->getUserOrder($user_id);
        return view('dashboard.shop.orders', compact('itemsInCart', 'cartRequest', 'orders', 'shoppingCarts'));
    }

    public function show($shop_order_id)
    {
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this->requestService->requestItemInCart();
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems($user_id);
        $order = $this->shoppingOrderService->getShoppingOrder($shop_order_id);
        return view('dashboard.shop.viewOrder', compact('itemsInCart', 'cartRequest', 'order', 'shoppingCarts'));
    }

    public function payCart(Request $request)
    {
        $data = $request->all();
        $user_id = auth()->id();
        $this->userService->updateUserInfo($user_id, $data);
        $cart_product = $this->shoppingCartService->shoppingCartItems($user_id);

        $order_data['user_id'] = $user_id;
        $order_data['net_price'] = 0;

        foreach ($cart_product as $item) {
            $order_data['net_price'] += $item->product->final_price;
        }

        $order_data['total_price'] = $order_data['net_price'];
        $order = $this->shoppingOrderService->createOrder($order_data);

        foreach ($cart_product as $cart_item) {
            $data_item['product_id'] = $cart_item->product->id;
            $data_item['order_id'] = $order->id;
            $data_item['quantity'] = $cart_item->quantity;
            $data_item['price'] = $cart_item->product->final_price;
            $this->shoppingOrderItemService->createItem($data_item);
        }
        $this->shoppingCartService->emptyCartOfUser(auth()->id());

        // Payment
        if (true) {
            $update_data ['status'] = 2;
            $this->shoppingOrderService->updateShoppingOrder($update_data, $order->id);
        }
        return redirect('/home');
    }

    public function adminIndexOrder()
    {
        $orders = $this->shoppingOrderService->getAllOrders();
        return view('panel.shop.adminOrderIndex', compact('orders'));
    }

    public function adminEditOrder($order_id)
    {
        $order = $this->shoppingOrderService->getShoppingOrder($order_id);
        return view('panel.shop.adminViewOrder', compact('order'));
    }

    public function adminUpdateOrder(AdminOrderStatusRequest $request,$order_id)
    {
        $data = $request->all();
        $this->shoppingOrderService->updateShoppingOrder($data,$order_id);
        return back();
    }


}
