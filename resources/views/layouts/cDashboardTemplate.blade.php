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
    <!-- BEGIN: Page Level CSS-->'
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
@include('layouts.cDoashboardHeader')
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
            <div class="container">
                <div class="section">
                    <!-- Current balance & total transactions cards-->
                    <div class="row vertical-modern-dashboard">
                        <div class="col s12 m4 l4">
                            <!-- Current Balance -->
                            <div class="card animate fadeLeft">
                                <div class="card-content">
                                    <h6 class="mb-0 mt-0 display-flex justify-content-between">موجودی فعلی <i class="material-icons float-right">more_vert</i>
                                    </h6>
                                    <p class="medium-small"> چرخه صورتحساب</p>
                                    <div class="current-balance-container">
                                        <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
                                    </div>
                                    <h5 class="center-align">501500 تومان</h5>
                                    <p class="medium-small center-align">تراز چرخه صورتحساب استفاده می شود</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m8 l8 animate fadeRight">
                            <!-- Total Transaction -->
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title mb-0">تراکنش کل <i class="material-icons float-right">more_vert</i></h4>
                                    <p class="medium-small">معامله این ماه</p>
                                    <div class="total-transaction-container">
                                        <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Current balance & total transactions cards-->

                    <!-- User statistics & appointment cards-->
                    <div class="row">
                        <div class="col s12 l5">
                            <!-- User Statistics -->
                            <div class="card user-statistics-card animate fadeLeft">
                                <div class="card-content">
                                    <h4 class="card-title mb-0">آمار کاربر <i class="material-icons float-right">more_vert</i></h4>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <ul class="collection border-none mb-0">
                                                <li class="collection-item avatar">
                                                    <i class="material-icons circle pink accent-2">trending_up</i>
                                                    <p class="medium-small">امسال</p>
                                                    <h5 class="mt-0 mb-0">60%</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m6">
                                            <ul class="collection border-none mb-0">
                                                <li class="collection-item avatar">
                                                    <i class="material-icons circle purple accent-4">trending_down</i>
                                                    <p class="medium-small">سال پیش</p>
                                                    <h5 class="mt-0 mb-0">40%</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="user-statistics-container">
                                        <div id="user-statistics-bar-chart" class="user-statistics-shadow ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <!-- Recent Buyers -->
                            <div class="card recent-buyers-card animate fadeUp">
                                <div class="card-content">
                                    <h4 class="card-title mb-0">خریداران اخیر <i class="material-icons float-right">more_vert</i></h4>
                                    <p class="medium-small pt-2">امروز</p>
                                    <ul class="collection mb-0">
                                        <li class="collection-item avatar">
                                            <img src="{{asset('images/avatar/avatar-7.png')}}" alt="" class="circle" />
                                            <p class="font-weight-600">جان</p>
                                            <p class="medium-small">18, آبان 1398</p>
                                            <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                        </li>
                                        <li class="collection-item avatar">
                                            <img src="{{asset('images/avatar/avatar-3.png')}}" alt="" class="circle" />
                                            <p class="font-weight-600">آدام</p>
                                            <p class="medium-small">20, آبان 1398</p>
                                            <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                        </li>
                                        <li class="collection-item avatar">
                                            <img src="{{asset('images/avatar/avatar-5.png')}}" alt="" class="circle" />
                                            <p class="font-weight-600">جنیفر</p>
                                            <p class="medium-small">25, آبان 1398</p>
                                            <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3">
                            <div class="card animate fadeRight">
                                <div class="card-content">
                                    <h4 class="card-title mb-0">نسبت تبدیل</h4>
                                    <div class="conversion-ration-container mt-8">
                                        <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"></div>
                                    </div>
                                    <p class="medium-small center-align"> نسبت تبدیل ماه</p>
                                    <h5 class="center-align mb-0 mt-0">62%</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Current balance & appointment cards-->

                    <div class="row">
                        <div class="col s12 m6 l4">
                            <div class="card padding-4 animate fadeLeft">
                                <div class="row">
                                    <div class="col s5 m5">
                                        <h5 class="mb-0">1885</h5>
                                        <p class="no-margin">جدید</p>
                                        <p class="mb-0 pt-8">1,12,900</p>
                                    </div>
                                    <div class="col s7 m7 right-align">
                                        <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
                                        <p class="mb-0">کل مشتریان</p>
                                    </div>
                                </div>
                            </div>
                            <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
                                <div class="dashboard-revenue-wrapper padding-2 ml-2">
                                    <span class="new badge gradient-45deg-deep-orange-orange gradient-shadow mt-2 mr-2 price-rtl"> +900 <span>تومان</span> </span>
                                    <p class="mt-2 mb-0 font-weight-600">درآمد امروز</p>
                                    <p class="no-margin grey-text lighten-3 price-rtl"> 40,512 <span>تومان</span> متوسط </p>
                                    <h5 class="price-rtl"> 22,300 <span>تومان</span> </h5>
                                </div>
                                <div class="sample-chart-wrapper card-gradient-chart">
                                    <canvas id="custom-line-chart-sample-three" class="center"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l8">
                            <div class="card subscriber-list-card animate fadeRight">
                                <div class="card-content pb-1">
                                    <h4 class="card-title mb-0">لیست مشترکین <i class="material-icons float-right">more_vert</i></h4>
                                </div>
                                <table class="subscription-table responsive-table highlight">
                                    <thead>
                                    <tr>
                                        <th>نام</th>
                                        <th>شرکت</th>
                                        <th>تاریخ شروع</th>
                                        <th>موقعیت</th>
                                        <th>میزان</th>
                                        <th>فعالیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>مایکل</td>
                                        <td>ABC Fintech LTD.</td>
                                        <td>آبان 1,1398</td>
                                        <td><span class="badge pink lighten-5 pink-text text-accent-2">بسته</span></td>
                                        <td>تومان 1000.00</td>
                                        <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>آلوین</td>
                                        <td>ACME Pvt LTD.</td>
                                        <td>آبان 10,1398</td>
                                        <td><span class="badge green lighten-5 green-text text-accent-4">باز</span></td>
                                        <td>تومان 3000.00</td>
                                        <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>اریک</td>
                                        <td>Collboy Tech LTD.</td>
                                        <td>آبان 12,1398</td>
                                        <td><span class="badge green lighten-5 green-text text-accent-4">باز</span></td>
                                        <td>تومان 2000.00</td>
                                        <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                    </tr>
                                    <tr>
                                        <td>لیدیا</td>
                                        <td>My Fintech LTD.</td>
                                        <td>آبان 14,1398</td>
                                        <td><span class="badge pink lighten-5 pink-text text-accent-2">بسته</span></td>
                                        <td>تومان 1100.00</td>
                                        <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- START RIGHT SIDEBAR NAV -->
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
                                                <li class="tab col s4 p-0">
                                                    <a href="#messages" class="active">
                                                        <span>پیام ها</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings">
                                                        <span>تنظیمات</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#activity">
                                                        <span>فعالیت</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-out-right-body row pl-3">
                                <div id="messages" class="col s12 pb-0">
                                    <div class="collection border-none mb-0">
                                        <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                                        <ul class="collection right-sidebar-chat p-0 mb-0">
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">کیانو</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">ممنون</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.00 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-1.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">لئو</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-2.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">ریچارد</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-3.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">آدام</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">هی!</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.00 شب</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-4.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">جان</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">اوه خدا</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.14 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-5.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">ادوارد</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">عاشقتم</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.15 عصر</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-6.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">تامی</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">آیا میتونیم؟</p>
                                                </div>
                                                <span class="secondary-content medium-small">8.00 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-7.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">کریستین</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">عالی!</p>
                                                </div>
                                                <span class="secondary-content medium-small">9.53 شب</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-8.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">ویلارد</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">انجامش بده</p>
                                                </div>
                                                <span class="secondary-content medium-small">4.20 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-1.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">رونی</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">بدست آوردش</p>
                                                </div>
                                                <span class="secondary-content medium-small">5.20 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-9.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">سلنا</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">مرسی</p>
                                                </div>
                                                <span class="secondary-content medium-small">12.00 صبح</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-10.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">سارا</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">باشه</p>
                                                </div>
                                                <span class="secondary-content medium-small">11.14 شب</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-11.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">بتی</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">می تواند انجام دهد؟</p>
                                                </div>
                                                <span class="secondary-content medium-small">7.30 شب</span>
                                            </li>
                                            <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="{{asset('images/avatar/avatar-12.png')}}" alt="avatar" />
                  <i></i>
                </span>
                                                <div class="user-content">
                                                    <h6 class="line-height-0">کمیلیا</h6>
                                                    <p class="medium-small blue-grey-text text-lighten-3 pt-3">ولش کن</p>
                                                </div>
                                                <span class="secondary-content medium-small">2.00 ظهر</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="settings" class="col s12">
                                    <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">تنظیمات عمومی</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>اعلان</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>فعالیت اخیر را نشان بده</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>فعالیت اخیر را نشان بده</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>نمایش آمار کار</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>ایمیل های خود را نشان دهید</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>اعلان های ایمیل</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">تنظیمات سیستم</p>
                                    <ul class="collection border-none">
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>ورود به سیستم</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>گزارش خطا</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>برنامه های ورود به سیستم </span>
                                                <div class="switch right">
                                                    <label>
                                                        <input checked type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>سرورهای پشتیبان</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="collection-item border-none">
                                            <div class="m-0">
                                                <span>گزارش های حسابرسی</span>
                                                <div class="switch right">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span class="lever"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="activity" class="col s12">
                                    <div class="activity">
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">امروز</div>
                                                <h6 class="timeline-title">طراحی صفحه اصلی</h6>
                                                <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                <div class="timeline-content orange-text">مهم</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">10 دقیقه</div>
                                                <h6 class="timeline-title">ملیسا فعالیت شما را دوست داشت </h6>
                                                <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است.</p>
                                                <div class="timeline-content green-text">حل شد</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red active">
                                                <div class="timeline-time">30 دقیقه</div>
                                                <h6 class="timeline-title">12 کاربر جدید ثبت نام کردند</h6>
                                                <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                <div class="timeline-content">
                                                </div>
                                                <img src="{{asset('images/icon/pdf.png')}}" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                            </li>
                                            <li class="timeline-items timeline-icon-indigo active">
                                                <div class="timeline-time">2 ساعت</div>
                                                <h6 class="timeline-title">تینا در فعالیت شما شرکت می کند</h6>
                                                <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                <div class="timeline-content">
                                                </div>
                                                <img src="{{asset('images/icon/pdf.png')}}" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                            </li>
                                            <li class="timeline-items timeline-icon-orange">
                                                <div class="timeline-time">5 ساعت</div>
                                                <h6 class="timeline-title">جاش الان دنبالته</h6>
                                                <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                <div class="timeline-content red-text">در انتظار</div>
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">برنامه های ورود به سیستم</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">همین الان</div>
                                                <h6 class="timeline-title">سفارش جدید فوری دریافت کرد</h6>
                                                <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                <div class="timeline-content orange-text">مهم</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan active">
                                                <div class="timeline-time">5 دقیقه</div>
                                                <h6 class="timeline-title">خاموش کردن سیستم</h6>
                                                <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                <div class="timeline-content blue-text">فوری</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-red">
                                                <div class="timeline-time">20 دقیقه</div>
                                                <h6 class="timeline-title">بانک اطلاعاتی بارگیری 89٪</h6>
                                                <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                <div class="timeline-content">
                                                </div>
                                                <img src="{{asset('images/icon/pdf.png')}}" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                            </li>
                                        </ul>
                                        <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                        <ul class="widget-timeline mb-0">
                                            <li class="timeline-items timeline-icon-green active">
                                                <div class="timeline-time">10 دقیقه</div>
                                                <h6 class="timeline-title">خطای سیستم</h6>
                                                <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                <div class="timeline-content red-text">خطا</div>
                                            </li>
                                            <li class="timeline-items timeline-icon-cyan">
                                                <div class="timeline-time">1 دقیقه</div>
                                                <h6 class="timeline-title">سرور تولید پایین</h6>
                                                <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است</p>
                                                <div class="timeline-content blue-text">فوری</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Out Chat -->
                    <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                        <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                            <a href="#!"><i class="material-icons mr-0">chevron_left</i>مدیر</a>
                        </li>
                        <li class="chat-body">
                            <ul class="collection">
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">سلام!</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">چطور میتوانیم کمک کنیم؟ ما برای شما اینجا هستیم</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">من به دنبال بهترین الگوی سرپرست هستم؟</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">سرگرمی سرپرست پاسخگو قالب css است</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>8:20 صبح</p>
                                </li>

                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">اوه بسیار خوب</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">ممنون</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">چگونه می توانم آن را خریداری کنم؟</p>
                                    </div>
                                </li>

                                <li class="collection-item display-grid width-100 center-align">
                                    <p>9:00 صبح</p>
                                </li>

                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">از ThemeForest</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">فقط 24 دلار</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">اوه متشکرم</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="{{asset('images/avatar/avatar-7.png')}}"
                                                                                                 alt="avatar" />
          </span>
                                    <div class="user-content speech-bubble">
                                        <p class="medium-small">من آن را با اطمینان خریداری می کنم</p>
                                    </div>
                                </li>
                                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                    <div class="user-content speech-bubble-right">
                                        <p class="medium-small">عالی , از تماس با ما احساس راحتی کنید</p>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <li class="center-align chat-footer">
                            <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                <div class="input-field">
                                    <input id="icon_prefix" type="text" class="search" />
                                    <label for="icon_prefix">Type here..</label>
                                    <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
                <!-- Intro -->
                <div id="intro">
                    <div class="row">
                        <div class="col s12">
                            <div id="img-modal" class="modal white">
                                <div class="modal-content">
                                    <div class="bg-img-div"></div>
                                    <p class="modal-header right modal-close">
                                        پرش از معرفی <span class="right"><i class="material-icons right-align">clear</i></span>
                                    </p>
                                    <div class="carousel carousel-slider center intro-carousel">
                                        <div class="carousel-fixed-item center middle-indicator">
                                            <div class="left">
                                                <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev">
                                                    <i class="material-icons">navigate_next</i> <span class="hide-on-small-only">قبلی</span>
                                                </button>
                                            </div>

                                            <div class="right">
                                                <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                                    <span class="hide-on-small-only">بعدی</span> <i class="material-icons">navigate_before</i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="carousel-item slide-1">
                                            <img src="{{asset('images/gallery/intro-slide-1.png')}}" alt="" class="responsive-img animated fadeInUp slide-1-img">
                                            <h5 class="intro-step-title mt-7 center animated fadeInUp">به متریالایز خوش آمدید!</h5>
                                            <p class="intro-step-text mt-5 animated fadeInUp">متریالایز یک الگوی طراحی مدیر متریال طراحی پاسخگو بسیار عالی است که از الگوی مدیر چند منظوره الهام گرفته شده است. متریالایز مجموعه عظیمی از انیمیشن ها و ابزارک های طراحی مواد ، عناصر طراح کاربری
                                            </p>
                                        </div>
                                        <div class="carousel-item slide-2">
                                            <img src="{{asset('images/gallery/intro-features.png')}}" alt="" class="responsive-img slide-2-img">
                                            <h5 class="intro-step-title mt-7 center">مثال درخواست اطلاعات</h5>
                                            <p class="intro-step-text mt-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                            <div class="row">
                                                <div class="col s6">
                                                    <div class="input-field">
                                                        <label for="first_name">نام</label>
                                                        <input placeholder="نام" id="first_name" type="text" class="validate">
                                                    </div>
                                                </div>
                                                <div class="col s6">
                                                    <div class="input-field">
                                                        <select>
                                                            <option value="" disabled selected>ویژگی را انتخاب کنید:</option>
                                                            <option value="1">ویژگی 1</option>
                                                            <option value="2">ویژگی 2</option>
                                                            <option value="3">ویژگی 3</option>
                                                        </select>
                                                        <label>متریالایز سلکت</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item slide-3">
                                            <img src="{{asset('images/gallery/intro-app.png')}}" alt="" class="responsive-img slide-1-img">
                                            <h5 class="intro-step-title mt-7 center">ویژگی های برنامه ویترین</h5>
                                            <div class="row">
                                                <div class="col m5 offset-m1 s12">
                                                    <ul class="feature-list left-align">
                                                        <li><i class="material-icons">check</i> برنامه ایمیل</li>
                                                        <li><i class="material-icons">check</i> برنامه چت</li>
                                                        <li><i class="material-icons">check</i> لیست انجام کار</li>
                                                    </ul>
                                                </div>
                                                <div class="col m6 s12">
                                                    <ul class="feature-list left-align">
                                                        <li><i class="material-icons">check</i>برنامه تماس</li>
                                                        <li><i class="material-icons">check</i>تقویم کامل</li>
                                                        <li><i class="material-icons">check</i> برنامه تجارت الکترونیک</li>
                                                    </ul>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 center">
                                                        <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">شروع کنیم</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Intro -->
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-overlay"></div>
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
