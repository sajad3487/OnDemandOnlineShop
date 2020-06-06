<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
                    <input class="header-search-input z-depth-2 iransans" type="text" name="Search" placeholder="جست و جو..." data-search="template-list">
                    <ul class="search-list collection display-none"></ul>
                </div>
                <ul class="navbar-list right">
                    <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="#" data-target="translation-dropdown"><span class="flag-icon flag-icon-ir"></span></a></li>
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a></li>
                    <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
                </ul>
                <!-- translation-button-->
                <!-- translation-button-->
                <ul class="dropdown-content" id="translation-dropdown">
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-ir"></i> فارسی</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> انگلیسی</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> فرانسوی</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> پرتغالی</a></li>
                    <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> آلمانی</a></li>
                </ul>
                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>اطلاعیه<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>سفارش جدیدی گذاشته شده است!</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 ساعت گذشته</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> کار را تمام کرد</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 روز گذشته</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> تنظیمات به روز شد</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 روز گذشته</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span>جلسه مدیر شروع شد</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 روز گذشته</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span>گزارش ماهانه تهیه کنید</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 هفته پیش</time>
                    </li>
                </ul>
                <!-- profile-dropdown-->
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
</header>
