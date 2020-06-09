@extends('layouts.cDashboardTemplate')
@section('content')


<div class="container">
    <div class="section">
        <!-- Current balance & total transactions cards-->
        <div class="row vertical-modern-dashboard">

            <div class="col s12 animate fadeRight">
                <!-- Total Transaction -->
                <div id="centered-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">استعلام جدید</h4>
                        <p class="mb-2">برای ثبت کامل استعلام تمامی مراحل را تا انتها طی نمایید</p>
                        <div class="row">
                            <div class="col s12">
                            </div>
                            <div class="col s12">
                                <table class="centered">
                                    <thead>
                                    <tr>
                                        <th data-field="link">لینک کالا</th>
                                        <th data-field="quantity">تعداد</th>
                                        <th data-field="description">توضیحات</th>
                                        <th data-field="option">اصلاح</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td >
                                            <a href="#" class="waves-effect waves-light btn-small s1"><i class="material-icons left">cloud</i>مشاهده لینک</a>
                                        </td>
                                        <td>2</td>
                                        <td>باید آبی باشد و سایر لارج</td>
                                        <td>
                                            <a href="#"><i class="material-icons">edit</i></a>
                                            <a href="#"><i class="material-icons">delete</i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <a class="mt-2 btn waves-effect waves-light green darken-1">مرحله بعد</a>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- START RIGHT SIDEBAR NAV -->
    @include('layouts.cart')
    <!-- END RIGHT SIDEBAR NAV -->
    <!-- Intro -->
{{--    <div id="intro">--}}
{{--        <div class="row">--}}
{{--            <div class="col s12">--}}
{{--                <div id="img-modal" class="modal white">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="bg-img-div"></div>--}}
{{--                        <p class="modal-header right modal-close">--}}
{{--                            پرش از معرفی <span class="right"><i class="material-icons right-align">clear</i></span>--}}
{{--                        </p>--}}
{{--                        <div class="carousel carousel-slider center intro-carousel">--}}
{{--                            <div class="carousel-fixed-item center middle-indicator">--}}
{{--                                <div class="left">--}}
{{--                                    <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev">--}}
{{--                                        <i class="material-icons">navigate_next</i> <span class="hide-on-small-only">قبلی</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                                <div class="right">--}}
{{--                                    <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">--}}
{{--                                        <span class="hide-on-small-only">بعدی</span> <i class="material-icons">navigate_before</i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item slide-1">--}}
{{--                                <img src="{{asset('images/gallery/intro-slide-1.png')}}" alt="" class="responsive-img animated fadeInUp slide-1-img">--}}
{{--                                <h5 class="intro-step-title mt-7 center animated fadeInUp">به متریالایز خوش آمدید!</h5>--}}
{{--                                <p class="intro-step-text mt-5 animated fadeInUp">متریالایز یک الگوی طراحی مدیر متریال طراحی پاسخگو بسیار عالی است که از الگوی مدیر چند منظوره الهام گرفته شده است. متریالایز مجموعه عظیمی از انیمیشن ها و ابزارک های طراحی مواد ، عناصر طراح کاربری--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item slide-2">--}}
{{--                                <img src="{{asset('images/gallery/intro-features.png')}}" alt="" class="responsive-img slide-2-img">--}}
{{--                                <h5 class="intro-step-title mt-7 center">مثال درخواست اطلاعات</h5>--}}
{{--                                <p class="intro-step-text mt-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col s6">--}}
{{--                                        <div class="input-field">--}}
{{--                                            <label for="first_name">نام</label>--}}
{{--                                            <input placeholder="نام" id="first_name" type="text" class="validate">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col s6">--}}
{{--                                        <div class="input-field">--}}
{{--                                            <select>--}}
{{--                                                <option value="" disabled selected>ویژگی را انتخاب کنید:</option>--}}
{{--                                                <option value="1">ویژگی 1</option>--}}
{{--                                                <option value="2">ویژگی 2</option>--}}
{{--                                                <option value="3">ویژگی 3</option>--}}
{{--                                            </select>--}}
{{--                                            <label>متریالایز سلکت</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item slide-3">--}}
{{--                                <img src="{{asset('images/gallery/intro-app.png')}}" alt="" class="responsive-img slide-1-img">--}}
{{--                                <h5 class="intro-step-title mt-7 center">ویژگی های برنامه ویترین</h5>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col m5 offset-m1 s12">--}}
{{--                                        <ul class="feature-list left-align">--}}
{{--                                            <li><i class="material-icons">check</i> برنامه ایمیل</li>--}}
{{--                                            <li><i class="material-icons">check</i> برنامه چت</li>--}}
{{--                                            <li><i class="material-icons">check</i> لیست انجام کار</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="col m6 s12">--}}
{{--                                        <ul class="feature-list left-align">--}}
{{--                                            <li><i class="material-icons">check</i>برنامه تماس</li>--}}
{{--                                            <li><i class="material-icons">check</i>تقویم کامل</li>--}}
{{--                                            <li><i class="material-icons">check</i> برنامه تجارت الکترونیک</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col s12 center">--}}
{{--                                            <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">شروع کنیم</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
