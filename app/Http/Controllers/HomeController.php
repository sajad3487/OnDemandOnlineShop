<?php

namespace App\Http\Controllers;

use App\Http\Requests\userProfileRequest;
use App\Service\currencyService;
use App\Service\productService;
use App\Service\purchasedItemService;
use App\Service\QuotationService;
use App\Service\RequestService;
use App\Service\shoppingCartService;
use App\Service\shoppingOrderService;
use App\Service\UserService;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var QuotationService
     */
    private $quotationService;
    /**
     * @var QuotationService
     */
    private $requestService;
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var currencyService
     */
    private $currencyService;
    /**
     * @var productService
     */
    private $productService;
    /**
     * @var shoppingCartService
     */
    private $shoppingCartService;
    /**
     * @var shoppingOrderService
     */
    private $shoppingOrderService;
    /**
     * @var purchasedItemService
     */
    private $purchasedItemService;

    /**
     * Create a new controller instance.
     *
     * @param QuotationService $quotationService
     * @param RequestService $requestService
     */
    public function __construct(
        QuotationService $quotationService,
        UserService $userService,
        RequestService $requestService,
        currencyService $currencyService,
        productService $productService,
        shoppingCartService $shoppingCartService,
        shoppingOrderService $shoppingOrderService,
        purchasedItemService $purchasedItemService
    )
    {
        $this->middleware('auth');
        $this->quotationService = $quotationService;
        $this->requestService = $requestService;
        $this->userService = $userService;
        $this->currencyService = $currencyService;
        $this->productService = $productService;
        $this->shoppingCartService = $shoppingCartService;
        $this->shoppingOrderService = $shoppingOrderService;
        $this->purchasedItemService = $purchasedItemService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->roles == 1) {
            return redirect('/admin/panel');
        }
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this->requestService->requestItemInCart();
        $currency = $this->currencyService->getLastCurrencyPrice();
        $popularProducts = $this->productService->getPopularProduct(4);
        $previousProducts = $this->productService->getLatestProduct(8);
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems(auth()->id());
        return view('dashboard.customerDashboard', compact('cartRequest', 'itemsInCart', 'currency', 'popularProducts', 'previousProducts', 'shoppingCarts'));
    }

    public function view()
    {
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $user = $this->userService->getUserWithId($user_id);
        $cartRequest = $this->requestService->requestItemInCart();
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems(auth()->id());
        return view('dashboard.editProfile', compact("cartRequest", "user", "itemsInCart", 'shoppingCarts'));
    }

    public function edit(userProfileRequest $userRequest)
    {
        $user = auth()->user();
        $user->update($userRequest->all());
        return back();
    }

    public function adminIndex()
    {
        $customer_number = $this->userService->countCustomer();
        $quotation_number = $this->quotationService->countQuoation();
        $order_number = $this->shoppingOrderService->countActiveOrder ();
        $paid_number = $this->purchasedItemService->countPaidPurchasedItem();
        $currency = $this->currencyService->getLastCurrencyPrice();
        return view('panel.adminPanel', compact('customer_number','quotation_number','order_number','paid_number','currency'));
    }

    public function adminUserViewLanding()
    {
        return view('panel.adminUserView');
    }

    public function adminFindUser(userProfileRequest $userProfileRequest)
    {
        $user = $this->userService->getUserByInfo($userProfileRequest);
        if ($user == null) {
            return back();
        }
        return view('panel.adminViewProfile', compact('user'));
    }

    public function adminView($user_id)
    {
        $user = $this->userService->getUserWithId($user_id);
        return view('panel.adminViewProfile', compact('user'));
    }
}
