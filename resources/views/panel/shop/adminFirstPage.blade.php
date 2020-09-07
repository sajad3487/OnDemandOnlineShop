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
    <title>مهویتالی</title>
    <link rel="apple-touch-icon" href="{{asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/dataTables.checkboxes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist-plugin-tooltip.css')}}">
    <!-- END: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/style-rtl.min.css')}}">
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/dashboard-modern.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/intro.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-invoice.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/vendors/data-tables/css/select.dataTables.min.css')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> بیگ انیا | قالب فروشگاهی چند منظوره HTML </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <!-- icofont -->
    <link rel="stylesheet" href="{{asset('front/css/fontawesome.min.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
    <!-- select 2  -->
    <link rel="stylesheet" href="{{asset('front/css/select2.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

<!-- BEGIN: Header-->
@include('layouts.adminPanelHeader')
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
@include('layouts.adminPanelSidebar')
<!-- END: SideNav-->
<div id="main">
    <div class="row">
        @include('fragment.errors')
        <div class="container">
            <div class="section">

                <div class="header-area-five header-bg-five p-0 pb-4" style="background-image: url({{asset($slider->media_path) ?? asset('front/img/bg/header-bg-5.jpg')}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                                    <input name="type" value="slider" class="display-none">
                                    @csrf
                                    <div class="header-inner "><!-- header inner -->

                                        <div class="switch mt-3">
                                            <label>
                                                <input name="status" type="checkbox" @if($slider->status == 1)checked @endif>
                                                <span class="lever"></span>
                                            </label>
                                        </div>

                                        <div class="file-field input-field p-0">
                                            <div class="btn" style="line-height: 2rem">
                                                <span>
                                                     تصویر پس زمینه<i class="material-icons left">camera_alt</i>
                                                </span>
                                                    <input type="file" name="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" value="{{$slider->media_path ?? "front/img/bg/header-bg-5.jpg"}}">
                                            </div>
                                        </div>


                                        <span class="subtitle">
                                            <input class="form-group text-primary"  name="subtitle" placeholder="زیر عنوان اول" value="{{old('subtitle') ?? $slider->subtitle ?? ''}}">
                                        </span>
                                        <h1 class="title">
                                            <input class="form-group mt-5" name="title" style="font-size: 0.8em; height: 150px" placeholder="عنوان اصلی" value="{{ old('title') ?? $slider->title ?? ''}}">
                                        </h1>
                                        <p class="fadeInDown">
                                            <input class="form-group" name="second_subtitle" placeholder="زیر عنوان دوم" value="{{old('second_subtitle') ?? $slider->second_subtitle ?? ''}}">
                                        </p>
                                        <div class="btn-wrapper  fadeInDown">
                                            <a href="#" class="boxed-btn">
                                                <input class="form-group" name="button_text" placeholder="نوشته دکمه" value="{{old('button_text') ?? $slider->button_text ?? ''}}">
                                            </a>
                                        </div>
                                        <div class="mt-4">
                                            <input type="text" name="button_link" id="" placeholder="لینک دکمه" value="{{old('button_link') ?? $slider->button_link ?? ''}}">
                                        </div>
                                        <button class="btn waves-effect green right iransans" type="submit" name="action">ذخیره
                                            <i class="material-icons right">add_to_photos</i>
                                        </button>
                                    </div><!-- //. header inner -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- promotional area seven start -->
                <div class="promotinal-area-seven p-0">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input name="type" value="promotional1" class="display-none">
                                    <div class="switch mt-3">
                                        <label>
                                            <input name="status" type="checkbox" @if($promotional1->status == 1)checked @endif>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                <div class="promotional-banner-area left"><!-- promotinal banner area  -->
                                        <div class="img-wrapper">
                                            <img src="{{ asset('front/img/promotional/13.jpg')}}" alt="promotional images">
                                            <div class="hover">
                                                <div class="hover-inner">
                                                    <div class="file-field input-field p-0">
                                                        <div class="btn" style="line-height: 2rem">
                                                            <span>
                                                                 تصویر پس زمینه<i class="material-icons left">camera_alt</i>
                                                            </span>
                                                            <input type="file" name="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" value="{{$promotional1->media_path ?? "front/img/bg/header-bg-5.jpg"}}">
                                                        </div>
                                                    </div>
                                                    <h2 class="title ">
                                                        <input class="form-group" name="title" value="{{$promotional1->title}}" style="font-size: 0.4em; height: 40px" placeholder="عنوان اصلی">
                                                    </h2>
                                                    <div class="btn-wrapper fadeIn">

                                                        <a href="#" class="boxed-btn">
                                                            <input class="form-group" value="{{$promotional1->button_text}}" name="button_text" placeholder="نوشته دکمه">
                                                        </a>
                                                        <input type="text" name="button_link" value="{{$promotional1->button_link}}" id="" placeholder="لینک دکمه">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn waves-effect green right iransans mt-2" type="submit" name="action">ذخیره
                                            <i class="material-icons right">add_to_photos</i>
                                        </button>
                                </div><!-- //.promotinal banner area  -->
                                </form>

                            </div>
                            <div class="col-lg-6">
                                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input name="type" value="promotional2" class="display-none">
                                    <div class="switch mt-3">
                                        <label>
                                            <input name="status" type="checkbox" @if($promotional2->status == 1)checked @endif>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                    <div class="promotional-banner-area left"><!-- promotinal banner area  -->
                                        <div class="img-wrapper">
                                            <img src="{{ asset('front/img/promotional/13.jpg')}}" alt="promotional images">
                                            <div class="hover">
                                                <div class="hover-inner">
                                                    <div class="file-field input-field p-0">
                                                        <div class="btn" style="line-height: 2rem">
                                                            <span>
                                                                 تصویر پس زمینه<i class="material-icons left">camera_alt</i>
                                                            </span>
                                                            <input type="file" name="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" value="{{$promotional2->media_path ?? "front/img/bg/header-bg-5.jpg"}}">
                                                        </div>
                                                    </div>
                                                    <h2 class="title ">
                                                        <input class="form-group" name="title" value="{{$promotional2->title}}" style="font-size: 0.4em; height: 40px" placeholder="عنوان اصلی">
                                                    </h2>
                                                    <div class="btn-wrapper fadeIn">

                                                        <a href="#" class="boxed-btn">
                                                            <input class="form-group" value="{{$promotional2->button_text}}" name="button_text" placeholder="نوشته دکمه">
                                                        </a>
                                                        <input type="text" name="button_link" value="{{$promotional2->button_link}}" id="" placeholder="لینک دکمه">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn waves-effect green right iransans mt-2" type="submit" name="action">ذخیره
                                            <i class="material-icons right">add_to_photos</i>
                                        </button>
                                    </div><!-- //.promotinal banner area  -->
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- promotional area seven end -->
                <hr>

                <!-- filter area home four start -->
                <div class="filter-ara-home-five p-0">
                    <div class="container">
                        <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                            <input name="type" value="filtered_one" class="display-none">
                            @csrf
                            <div class="switch mt-3">
                                <label>
                                    <input name="status" type="checkbox" @if($filtered_one->status == 1)checked @endif>
                                    <span class="lever"></span>
                                </label>
                            </div>
                            <button class="btn waves-effect green right iransans" type="submit" name="action">ذخیره
                                <i class="material-icons right">add_to_photos</i>
                            </button>
                        </form>
                        <div class="center-align mb-4">
                            <h3>جدیدترین کالاها</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-area-menu-home-masonry"><!-- filter area menu home masonry -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="bestseller_2" role="tabpanel" aria-labelledby="bestseller-tab_2">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/01.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">ورزشی</span>
                                                            <a href="#"><h4 class="title">تی شرت سیاه برک</h4></a>
                                                            <div class="price"><span class="sprice">23.00 تومان</span> <del class="dprice">55.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/02.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">کفش</span>
                                                            <a href="#"><h4 class="title">کفش تیره</h4></a>
                                                            <div class="price"><span class="sprice">50.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/03.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">لوازم جانبی</span>
                                                            <a href="#"><h4 class="title">میلو هوروبرد</h4></a>
                                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">99.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/04.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">کفش</span>
                                                            <a href="#"><h4 class="title">کفش پیاده روی</h4></a>
                                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">120.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- //.filter area menu home masonry -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter area home four end -->

                <hr>
                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                    <input name="type" value="surprise" class="display-none">
                    @csrf
                    <div class="switch mt-3 mb-3">
                        <label>
                            <input name="status" type="checkbox" @if($surprise->status == 1)checked @endif>
                            <span class="lever"></span>
                        </label>
                    </div>
                <!-- surprise area start -->
                <div class="surprise-area light-bg">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="surprise-inner"><!-- surprise inner -->
                                    <div class="video-thumb">
                                        <img src="{{asset($surprise->media_path) ?? asset('front/img/surprise-image.jpg')}}" alt="surprise image">
                                        <div class="hover">
                                            <div class="file-field input-field p-0">
                                                <div class="btn" style="line-height: 2rem">
                                                <span>
                                                     تصویر پس زمینه<i class="material-icons left">camera_alt</i>
                                                </span>
                                                    <input type="file" name="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" value="{{$surprise->media_path ?? "front/img/bg/header-bg-5.jpg"}}">
                                                </div>
                                            </div>

                                            <a href="{{$surprise->button_link ?? 'https://www.youtube.com/watch?v=ivbq60GlBWs'}}" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>

                                        </div>

                                    </div>
                                    <div class="mt-3">

                                        <input type="text" name="button_link" value="{{$surprise->button_link}}" id="" class="col col-sm-6" placeholder="لینک دکمه" style="line-height: 20px">
                                    </div>

                                    <div class="content-area">
                                        <h3 class="title">
                                            <input type="text" name="title" value="{{$surprise->title}}" id="" class="" placeholder="نوشته بنر" style="line-height: 60px; font-size: 0.6em">
                                        </h3>
                                    </div>
                                </div><!-- //.surprise inner -->
                                <button class="btn waves-effect green right iransans mb-3" type="submit" name="action">ذخیره
                                    <i class="material-icons right">add_to_photos</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <!-- surprise area end -->

                <hr>
                <!-- filter area home four start -->
                <div class="filter-ara-home-five-two">
                    <div class="container">
                        <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                            <input name="type" value="filtered_two" class="display-none">
                            @csrf
                            <div class="switch mt-3">
                                <label>
                                    <input name="status" type="checkbox" @if($filtered_two->status == 1)checked @endif>
                                    <span class="lever"></span>
                                </label>
                            </div>
                            <button class="btn waves-effect green right iransans" type="submit" name="action">ذخیره
                                <i class="material-icons right">add_to_photos</i>
                            </button>
                        </form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-area-menu-home-masonry-six"><!-- filter area menu home masonry -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/01.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">ورزشی</span>
                                                            <a href="#"><h4 class="title">تی شرت سیاه برک</h4></a>
                                                            <div class="price"><span class="sprice">23.00 تومان</span> <del class="dprice">55.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/02.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">کفش</span>
                                                            <a href="#"><h4 class="title">کفش تیره</h4></a>
                                                            <div class="price"><span class="sprice">50.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/03.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">لوازم جانبی</span>
                                                            <a href="#"><h4 class="title">میلو هوروبرد</h4></a>
                                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">99.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-new-collection-item"><!-- single new collections -->
                                                        <div class="thumb">
                                                            <img src="{{asset('front/img/flower/04.jpg')}}" alt="new collcetion image">
                                                            <div class="hover">
                                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category">کفش</span>
                                                            <a href="#"><h4 class="title">کفش پیاده روی</h4></a>
                                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">120.00 تومان</del></div>
                                                        </div>
                                                    </div><!-- //. single new collections  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- //.filter area menu home masonry -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter area home four end -->

                <hr>
                <!-- banner area home 5 start  -->
                <div class="banner-area-home-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                                    <input name="type" value="banner_1" class="display-none">
                                    @csrf
                                    <div class="switch mt-3">
                                        <label>
                                            <input name="status" type="checkbox" @if($banner_1->status == 1)checked @endif>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                <div class="banner-image"><!-- banner image -->
                                    <img src="{{asset($banner_1->media_path) ?? asset('front/img/banner-add/02-big.jpg')}}" alt="banner image">
                                </div>
                                <div class="file-field input-field p-0 m-0 mt-2">

                                    <div class="btn" style="line-height: 2rem">
                                        <span>
                                             تصویر بنر<i class="material-icons left">camera_alt</i>
                                        </span>
                                    </div>
                                    <button class="btn waves-effect green right iransans" type="submit" name="action">ذخیره
                                        <i class="material-icons right">add_to_photos</i>
                                    </button>
                                </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <form action="{{url('/admin/shop/firstPage/updateFirstPage')}}" method="post" enctype="multipart/form-data">
                                    <input name="type" value="banner_2" class="display-none">
                                    @csrf
                                    <div class="switch mt-3">
                                        <label>
                                            <input name="status" type="checkbox" @if($banner_2->status == 1)checked @endif>
                                            <span class="lever"></span>
                                        </label>
                                    </div>
                                    <div class="banner-image"><!-- banner image -->
                                        <img src="{{asset($banner_2->media_path) ?? asset('front/img/banner-add/02-bg.jpg')}}" alt="banner image">
                                    </div>
                                    <div class="file-field input-field p-0 m-0 mt-2">

                                        <div class="btn" style="line-height: 2rem">
                                            <span>
                                                 تصویر بنر<i class="material-icons left">camera_alt</i>
                                            </span>
                                        </div>
                                        <button class="btn waves-effect green right iransans" type="submit" name="action">ذخیره
                                            <i class="material-icons right">add_to_photos</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- banner area home 5 end  -->

            </div>
        </div>
    </div>
</div>
<script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>

<script src="{{asset('js/scripts/form-wizard.min.js')}}"></script>
<!-- BEGIN: Page Main-->



<!-- Theme Customizer -->

{{--<a href="#" data-target="theme-cutomizer-out" class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i class="material-icons">settings</i></a>--}}


<!--/ Theme Customizer -->
{{--@include('layouts.themeCustomizer')--}}


<!-- BEGIN: Footer-->

@include('layouts.footer')
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
<script src="{{asset('js/scripts/advance-ui-carousel.min.js')}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('js-rtl/scripts/dashboard-modern-rtl.js')}}"></script>
<script src="{{asset('js/scripts/intro.min.js')}}"></script>
<script src="{{asset('js/scripts/ui-alerts.min.js')}}"></script>
<script src="{{asset('js/scripts/advance-ui-modals.min.js')}}"></script>
<!-- END PAGE LEVEL JS-->
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('js/scripts/app-invoice.min.js')}}"></script>
<script src="{{asset('js/scripts/advance-ui-modals.min.js')}}"></script>
<!-- jquery -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<!-- popper -->
<script src="{{asset('front/js/popper.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<!-- way poin js-->
<script src="{{asset('front/js/waypoints.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
<!-- wow js-->
<script src="{{asset('front/js/wow.min.js')}}"></script>
<!-- counterup js-->
<script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
<!-- select 2 -->
<script src="{{asset('front/js/select2.min.js')}}"></script>
<!-- main -->
<script src="{{asset('front/js/main.js')}}"></script>
<script src="{{asset('js/scripts/data-tables.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#categoryId').change(function () {
            var categoryId = $('#categoryId').val();
            var _token = $("input[name='_token']").val();

            $.ajax({
                url: '/admin/shop/category/subCategory',
                type: 'POST',
                data: {categoryId: categoryId , _token : _token}
            })
                .done(function (msg) {
                    if(msg){
                        var li="<select name='child' id='child' style='display: block'><option value='Select' disabled selected>انتخاب زیرشاخه:</option>";
                        $.each( msg, function( key, value ) {
                            li+='<option value="'+key+'">'+value+'</option>';
                        });
                        li += "</select>";
                    }else{
                        var li = "<select style='display: block'><option>زیر شاخه ندارد</option> </select>";
                    }
                    $('#childCategory').html(li);
                })
                .fail(function () {
                    var li = "<select style='display: block'><option>زیر شاخه ندارد</option> </select>";
                    $('#childCategory').html(li);
                    $('#grandChildCategory').html(li);

                })
        });
        $('#childCategory').change(function () {
            var categoryId = $('#child').val();
            var _token = $("input[name='_token']").val();

            $.ajax({
                url: '/admin/shop/category/subCategory',
                type: 'POST',
                data: {categoryId: categoryId , _token : _token}
            })
                .done(function (msg) {
                    var li="<select name='grandChild' id='grandChild' style='display: block'><option value='Select' disabled selected>انتخاب زیرشاخه دوم:</option>";
                    $.each( msg, function( key, value ) {
                        li+='<option value="'+key+'">'+value+'</option>';
                    });
                    li += "</select>";
                    // alert(li);
                    $('#grandChildCategory').html(li);
                })
                .fail(function () {
                    var li = "<select style='display: block'><option>زیر شاخه ندارد</option> </select>";
                    $('#grandChildCategory').html(li);

                })
        });



    });

</script></body>

</html>
