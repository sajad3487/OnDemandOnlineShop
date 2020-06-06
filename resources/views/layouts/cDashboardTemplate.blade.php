<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>متریالایز | الگوی منوی مدرن عمودی | مدرن </title>
    <link rel="apple-touch-icon" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist-plugin-tooltip.css')}}">
    <!-- END: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/style-rtl.min.css')}}">
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/dashboard-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/intro.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

<!-- BEGIN: Header-->
@include('layouts.cDashboardHeader')
<!-- END: Header-->
<ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">17kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('images/icon/doc-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
                </div>
                <div class="status"><small class="grey-text">550kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('images/icon/xls-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                </div>
                <div class="status"><small class="grey-text">20kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img src="{{asset('images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                </div>
                <div class="status"><small class="grey-text">37kb</small></div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="{{asset('images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="{{asset('images/avatar/avatar-8.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="{{asset('images/avatar/avatar-10.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
                </div>
            </div>
        </a>
    </li>
    <li class="auto-suggestion">
        <a class="collection-item" href="#">
            <div class="display-flex">
                <div class="display-flex align-item-center flex-grow-1">
                    <div class="avatar"><img class="circle" src="{{asset('images/avatar/avatar-12.png')}}" width="30" alt="sample image"></div>
                    <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
                </div>
            </div>
        </a>
    </li>
</ul>
<ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title">
        <a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6>
        </a>
    </li>
</ul>
<ul class="display-none" id="search-not-found">
    <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
</ul>



<!-- BEGIN: SideNav-->
@include('layouts.cDashboardSidbar')
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">

            @yield('content')

        </div>
    </div>
</div>
<!-- END: Page Main-->

<!-- Theme Customizer -->

<a href="#" data-target="theme-cutomizer-out" class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i class="material-icons">settings</i></a>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
    <div class="col s12">
        <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
        <h5 class="theme-cutomizer-title">تنظیم کننده تم</h5>
        <p class="medium-small">سفارشی سازی و پیش نمایش در زمان واقعی</p>
        <div class="menu-options">
            <h6 class="mt-6">گزینه های منو</h6>
            <hr class="customize-devider" />
            <div class="menu-options-form row">
                <div class="input-field col s12 menu-color mb-0">
                    <p class="mt-0">رنگ منو</p>
                    <div class="gradient-color center-align">
                        <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                        <span class="menu-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="menu-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="menu-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                        <span class="menu-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
                        <span class="menu-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                        <span class="menu-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-color-option red" data-color="red"></span>
                        <span class="menu-color-option purple" data-color="purple"></span>
                        <span class="menu-color-option pink" data-color="pink"></span>
                        <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-color-option cyan" data-color="cyan"></span>
                        <span class="menu-color-option teal" data-color="teal"></span>
                        <span class="menu-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12 menu-bg-color mb-0">
                    <p class="mt-0">رنگ پس زمینه منو</p>
                    <div class="gradient-color center-align">
                        <span class="menu-bg-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                        <span class="menu-bg-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="menu-bg-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="menu-bg-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                        <span class="menu-bg-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
                        <span class="menu-bg-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                        <span class="menu-bg-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-bg-color-option red" data-color="red"></span>
                        <span class="menu-bg-color-option purple" data-color="purple"></span>
                        <span class="menu-bg-color-option pink" data-color="pink"></span>
                        <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                        <span class="menu-bg-color-option teal" data-color="teal"></span>
                        <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        منو تاریک
                        <label class="float-right"><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        منو به هم خورده
                        <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        <p class="mt-0">انتخاب منو</p>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-square"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>مربع</span>
                        </label>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-rounded"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>گرد</span>
                        </label>
                        <label>
                            <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio" />
                            <span>معمولی</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="mt-6">گزینه های نوار</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
            <div class="input-field col s12 navbar-color mb-0">
                <p class="mt-0">رنگ نوار</p>
                <div class="gradient-color center-align">
                    <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                    <span class="navbar-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                    <span class="navbar-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
                    <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                    <span class="navbar-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
                    <span class="navbar-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
                    <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                    <span class="navbar-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                    <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
                </div>
                <div class="solid-color center-align">
                    <span class="navbar-color-option red" data-color="red"></span>
                    <span class="navbar-color-option purple" data-color="purple"></span>
                    <span class="navbar-color-option pink" data-color="pink"></span>
                    <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                    <span class="navbar-color-option cyan" data-color="cyan"></span>
                    <span class="navbar-color-option teal" data-color="teal"></span>
                    <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                    <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                    <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    نوار تاریک
                    <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    نوار ثابت شد
                    <label class="float-right"><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
        <h6 class="mt-6">گزینه های پاورقی</h6>
        <hr class="customize-devider" />
        <div class="navbar-options row">
            <div class="input-field col s12">
                <div class="switch">
                    پاورقی تاریک
                    <label class="float-right"><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    پاورقی ثابت شد
                    <label class="float-right"><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Theme Customizer -->



<!-- BEGIN: Footer-->

<footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2020 <a href="http://ticktockteam.ir/" target="_blank">تیم تیک تاک</a>
                    تمامی حقوق محفوظ است.</span><span class="right hide-on-small-only">فارسی سازی شده توسط <a
                    href="http://ticktockteam.ir/">تیم تیک تاک</a></span></div>
    </div>
</footer>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset('js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/search.min.js')}}"></script>
<script src="{{asset('js-rtl/custom/custom-script-rtl.min.js')}}"></script>
<script src="{{asset('js/scripts/customizer.min.js')}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('js-rtl/scripts/dashboard-modern-rtl.js')}}"></script>
<script src="{{asset('js/scripts/intro.min.js')}}"></script>
<!-- END PAGE LEVEL JS-->
</body>

</html>
