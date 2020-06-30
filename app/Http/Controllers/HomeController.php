<?php

namespace App\Http\Controllers;

use App\Http\Requests\userProfileRequest;
use App\Service\QuotationService;
use App\Service\RequestService;
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
     * Create a new controller instance.
     *
     * @param QuotationService $quotationService
     * @param RequestService $requestService
     */
    public function __construct(
        QuotationService $quotationService,
        UserService $userService,
        RequestService $requestService
    ){
        $this->middleware('auth');
        $this->quotationService =$quotationService;
        $this->requestService =$requestService;
        $this->userService =$userService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->roles == 1){
            return redirect('/admin/panel');
        }
        $itemsInCart = $this->quotationService->ItemOfCart();
        $cartRequest = $this->requestService->requestItemInCart();
        return view('dashboard.customerDashboard',compact('cartRequest','itemsInCart'));
    }
    public function view (){
        $user = auth()->user();
        return view('dashboard.editProfile',compact('user'));
    }
    public function edit (userProfileRequest $userRequest){
        $user = auth()->user();
        $user->update($userRequest->all());
        return back();
    }
    public function adminIndex (){
        return view('panel.adminPanel');
    }
    public function adminUserViewLanding(){
        return view('panel.adminUserView');
    }
    public function adminFindUser(userProfileRequest $userProfileRequest){
        $user =$this->userService->getUserByInfo($userProfileRequest);
        if($user == null){
            return back();
        }
        return view('panel.adminViewProfile',compact('user'));
    }
    public function adminView($user_id){
        $user = $this->userService->getUserWithId($user_id);
        return view('panel.adminViewProfile',compact('user'));
    }
}
