<?php

namespace App\Http\Controllers;

use App\Http\Requests\wishListRequest;
use App\Service\QuotationService;
use App\Service\RequestService;
use App\Service\shoppingCartService;
use App\Service\UserService;
use App\Service\wishListService;
use App\wishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * @var wishListService
     */
    private $wishListService;
    /**
     * @var shoppingCartService
     */
    private $shoppingCartService;
    /**
     * @var QuotationService
     */
    private $quotationService;
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var RequestService
     */
    private $requestService;

    public function __construct(
        wishListService $wishListService,
        shoppingCartService $shoppingCartService,
        QuotationService $quotationService,
        UserService $userService,
        RequestService $requestService
    )
    {
        $this->wishListService = $wishListService;
        $this->shoppingCartService = $shoppingCartService;
        $this->quotationService = $quotationService;
        $this->userService = $userService;
        $this->requestService = $requestService;
    }

    public function index (){
        $itemsInCart = $this->quotationService->ItemOfCart();
        $user = $this->userService->getUserWithId(auth()->id());
        $cartRequest = $this ->requestService->requestItemInCart();
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems(auth()->id());
        return view('dashboard.wishList',compact("cartRequest","user","itemsInCart",'shoppingCarts'));
    }
    public function create (){
        $itemsInCart = $this->quotationService->ItemOfCart();
        $user = $this->userService->getUserWithId(auth()->id());
        $cartRequest = $this ->requestService->requestItemInCart();
        $shoppingCarts = $this->shoppingCartService->shoppingCartItems(auth()->id());
        return view('dashboard.createWishList',compact("cartRequest","user","itemsInCart",'shoppingCarts'));
    }
    public function store (wishListRequest $wishListRequest){
        $wish =$wishListRequest->all();
        $wish['user_id']=auth()->id();
        $this->wishListService->createWishList($wish);
        return redirect('wishList/index');
    }
    public function delete ($wish_id){
        $this->wishListService->deleteWish($wish_id);
        return redirect('wishList/index');
    }
}
