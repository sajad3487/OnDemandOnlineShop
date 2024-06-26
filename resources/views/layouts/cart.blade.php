<aside id="right-sidebar-nav">
    <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
        <div class="row">
            <div class="slide-out-right-title">
                <div class="col s12 border-bottom-1 pb-0 pt-1">
                    <div class="row">
                        <div class="col s2 pr-0 center">
                            <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                        </div>
                        <div class="col s10 pl-0">
                            <ul class="tabs">
                                <li class="tab col s6 p-0">
                                    <a href="#byOrder" class="active">
                                        <span>سبد استعلام قیمت</span>
                                    </a>
                                </li>
                                <li class="tab col s6 p-0">
                                    <a href="#readyProduct">
                                        <span>سبد کالاهای فوری</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-out-right-body row pl-3">
                @if($itemsInCart ?? 0 > 0)
                    <div id="byOrder" class="col s12 pb-0">
                        <div class="collection border-none mb-0">
                            @foreach($cartRequest as $cartRequests)
                                <ul class="collection right-sidebar-chat p-0 mb-0">
                                    <a href="{{$cartRequests['link'] ?? ''}}" target="_blank">
                                        <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pt-4 pb-0">
                                            <div class="user-content ml-5 mt-1">
                                                <h6 class=" ">مشاهده کالا</h6>
                                                <p class="medium-small blue-grey-text text-lighten-3"> تعداد :  {{$cartRequests['quantity'] ?? ''}}</p>
                                            </div>
                                        </li>
                                    </a>

                                </ul>
                            @endforeach
                        </div>

                        <div class="col s12 center mb-3">
                            <p><a class="mb-6 btn waves-effect waves-light green darken-1" href="{{url('/quotation/create')}}">ثبت استعلام</a></p>
                        </div>
                    </div>
                @else
                    <div id="byOrder" class="col s12 pb-0">
                        <div class="collection border-none mb-0">
                            <div id="maintenance" class="col s12 center-align white">
                                <h5 class="error-code green-text mb-6">سبد کالای شما خالی است</h5>
                                <h6 class="mb-6 mt-2 grey-text">لینک کالای مورد نظرت رو استعلام کن تا بصورت رایگان براتون پیشفاکتور صادر بشه</h6>
                                {{--                                    <a class="btn waves-effect waves-light" href="dashboard-ecommerce.html">بازگشت به خانه</a>--}}

                                <i class="material-icons "><span>touch_app</span></i>
                            </div>
                        </div>
                    </div>
                    @endif
                <div id="readyProduct"  class="col s12 pb-0">
                    <div class="collection border-none mb-0">
                        @foreach($shoppingCarts as $shoppingCart)
                        <ul class="collection right-sidebar-chat p-0 mb-0">
                            <a href="{{url("shop/product/$shoppingCart->id")}}">
                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pt-6 pb-0" >
                                    <span class="avatar-status avatar-online avatar-50"><img src="{{asset($shoppingCart->product->media->first()->file)}}" alt="avatar" />
                                    </span>
                                    <div class="user-content ml-5 mt-1">
                                        <h6 class="line-height-0">{{$shoppingCart->product->title}}</h6>
                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3"> تعداد : {{$shoppingCart->quantity}} </p>
                                    </div>
                                </li>
                            </a>
                        </ul>
                        @endforeach
                    </div>
                    <div class="col s12 center mb-3">
                        <p><a href="{{url('/shop/cart/index')}}" class="mb-6 btn waves-effect waves-light green darken-1">ثبت سفارش</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide Out Chat -->
    <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
            <a href="#!"><i class="material-icons mr-0">chevron_left</i>نام کالا</a>
        </li>
        <div class="row">
            <div class="col s12">
                <div id="html-validations" class="card card-tabs">
                    <div class="card-content">
                        <div class="card-title">
                            <div class="row">
                                <div class="col s12">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="{{asset('images/gallery/4.png')}}" alt="sample" /> <span class="card-title">عنوان کارت</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="html-view-validations">
                            <form class="formValidate0" id="formValidate0" method="get">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="link">اینک کالا *</label>
                                        <input class="validate" required id="link" name="link" type="text">
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="quantity">تعداد *</label>
                                        <input class="validate" required id="quantity" type="number" name="quantity">
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="ccomment0" name="ccomment0" class="materialize-textarea validate" required></textarea>
                                        <label for="ccomment0">توضیحات کالا : *</label>
                                    </div>
                                    <div class="col s12">
                                        <label for="tnc_select1">فوانین و مقررات</label>
                                        <p>
                                            <label>
                                                <input class="validate" required id="tnc_select1" required type="checkbox" />
                                                <span>لطفا با سیاست های ما موافقت کنید</span>
                                            </label>
                                        </p>
                                        <div class="input-field">
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <button class="btn waves-effect waves-light right iransans" type="submit" name="action">ارسال
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</aside>
