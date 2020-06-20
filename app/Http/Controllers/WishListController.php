<?php

namespace App\Http\Controllers;

use App\Http\Requests\wishListRequest;
use App\Service\wishListService;
use App\wishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    /**
     * @var wishListService
     */
    private $wishListService;

    public function __construct(wishListService $wishListService)
    {
        $this->wishListService = $wishListService;
    }

    public function index (){
        return view('dashboard.wishList');
    }
    public function create (){
        return view('dashboard.createWishList');
    }
    public function store (wishListRequest $wishListRequest){
        $wish =$wishListRequest->all();
        $wish['user_id']=auth()->id();
        $this->wishListService->createWishList($wish);
        return view('dashboard.wishList');
    }
    public function delete ($wish_id){
        $this->wishListService->deleteWish($wish_id);
        return view('dashboard.wishList');
    }
}
