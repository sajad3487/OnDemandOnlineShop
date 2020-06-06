@extends('layouts.cDashboardTemplate')
@section('content')

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
    @include('layouts.cart')
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

@endsection
