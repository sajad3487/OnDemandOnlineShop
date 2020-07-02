    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper">
                <a class="brand-logo darken-1" href="index-2.html"><img class="hide-on-med-and-down " src="{{asset('images/logo/materialize-logo.png')}}" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png"
                                                                                                                                                                                        alt="materialize logo" /><span class="logo-text hide-on-med-and-down">متریالایز</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">

            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                <li ><a class="active" href="{{url('/admin/panel')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">داشبورد</span></a>
                </li>
                <li ><a href="{{url('/admin/currencyPrice')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">قیمت ارز</span></a>
                </li>
                <li ><a href="{{url('/admin/discount')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">تخفیف ها</span></a>
                </li>
                <li><a href="{{url('/admin/quotation/report')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">گزارش گیری</span></a>
                </li>

            </ul>



            <li class="navigation-header"><a class="navigation-header-text">فاکتورها </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{url('/admin/quotation')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">استعلام های صادر نشده</span></a>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{url('/admin/purchasedItem/paid')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">پرداخت شده</span></a>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="Javascript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">لاجستیک</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="{{url('/admin/purchasedItem/purchased')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">خریداری شده</span></a>
                        </li>
                        <li><a href="{{url('/admin/purchasedItem/arrived')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">دفتر خارجی</span></a>
                        </li>
                        <li><a href="{{url('/admin/purchasedItem/shipped')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">ارسال به ایران</span></a>
                        </li>
                        <li><a href="{{url('/admin/purchasedItem/received')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">دفتر تهران</span></a>
                        </li>
                        <li><a href="{{url('/admin/purchasedItem/delivered')}}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">ارسال به مشتری</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="navigation-header"><a class="navigation-header-text">اطلاعات </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold"><a class="waves-effect waves-cyan " href="{{url('/admin/user/view')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">اطلاعات کاربران</span></a>
            </li>

            <li class="bold"><a class="waves-effect waves-cyan " href="{{url('/admin/purchasedItem/all')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">جامع</span></a>
            </li>

            <li class="navigation-header"><a class="navigation-header-text">مالی </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>

            <li class="navigation-header"><a class="navigation-header-text">وبلاگ </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>


            <li class="navigation-header"><a class="navigation-header-text">پشتیبانی </a><i class="navigation-header-icon material-icons">more_horiz</i>
            </li>


        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
