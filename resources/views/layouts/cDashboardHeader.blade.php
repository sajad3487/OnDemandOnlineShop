<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper ">

                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">add_shopping_cart</i>
                    <input class="header-search-input z-depth-2 iransans col-sm-10" type="text" name="Search" placeholder="استعلام لینک جدید" data-search="template-list">
                    <ul class="search-list collection display-none"></ul>
                </div>
                    <a class="btn-floating mb-1  ml-1 btn-small waves-effect waves-light mt-1 hide-on-med-and-down modal-trigger" href="#modal1">
                        <i class="material-icons">add</i>
                    </a>
                    <div id="modal1" class="modal modal-fixed-footer ">
                        <form action="{{url('/request/store')}}" method="post">
                            @csrf
                            <div class="modal-content ">
                                <h4>افزودن کالای جدید </h4>
                                @include('fragment.errors')
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" id="link" name="link" value="{{old('link')}}">
                                        <label class="contact-input" for="link">لینک</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" id="quantity" name="quantity" value="{{old('link')}}">
                                        <label class="contact-input" for="quantity">تعداد</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" id="description" name="description" value="{{old('link')}}">
                                        <label class="contact-input" for="description">توضبحات کالا</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <label>
                                        <input type="checkbox" name="rules" >
                                        <span>قوانین و مقررات سایت راقبول دارم</span>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer  mb-2">
                                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">انصراف</a>
                                <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat ">ثبت کالا</button>
                            </div>
                        </form>
                    </div>

{{--            <!-- Modal Trigger -->--}}


                <ul class="navbar-list right">
{{--                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>--}}
                    <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a></li>
                    <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">shopping_cart<small class="notification-badge">{{$itemsInCart ?? 0}}</small></i></a></li>
                </ul>

                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> مشخصات</a></li>
                    <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> چت</a></li>
                    <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> راهنمایی</a></li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> قفل کردن</a></li>
                    <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> خروج</a></li>
                </ul>
            </div>
            <nav class="display-none search-sm">
                <div class="nav-wrapper">
                    <form id="navbarForm">
                        <div class="input-field search-input-sm">
                            <input class="search-box-sm" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                            <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                            <ul class="search-list collection search-list-sm display-none"></ul>
                        </div>
                    </form>
                </div>
            </nav>



        </nav>
    </div>
    @include('layouts.cart')

</header>

