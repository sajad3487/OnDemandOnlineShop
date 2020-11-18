<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Service\QuotationService;
use App\Service\RequestService;
use App\Service\shoppingCartService;
use App\Service\UserService;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /**
     * @var shoppingCartService
     */
    private $shoppingCartService;
    /**
     * @var QuotationService
     */
    private $quotationService;
    /**
     * @var RequestService
     */
    private $requestService;
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(
        shoppingCartService $shoppingCartService,
        QuotationService $quotationService,
        RequestService $requestService,
        UserService $userService
    )
    {
        $this->shoppingCartService = $shoppingCartService;
        $this->quotationService = $quotationService;
        $this->requestService = $requestService;
        $this->userService = $userService;
    }

    public function index (){
        $user_id = auth()->id();
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this ->requestService->requestItemInCart();
        $quotations = $this->quotationService->unpaidQuotationByUserId($user_id);
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems(auth()->id());
        $user =$this->userService->getUserWithId($user_id);
        return view('dashboard.shop.shoppingCart',compact('shoppingCarts','itemsInCart','cartRequest','quotations','user'));
    }

    public function addToCart (CartRequest $request){
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $this->shoppingCartService->addProductToCart ($data);
        return back();
    }

    public function emptyCart (){
        $this->shoppingCartService->emptyCartOfUser(auth()->id());
        return back();
    }

    public function destroy ($shopping_cart_id){
        $this->shoppingCartService->deleteCartItem($shopping_cart_id);
        return back();
    }


}
