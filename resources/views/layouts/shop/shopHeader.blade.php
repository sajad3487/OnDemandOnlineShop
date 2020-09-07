<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-wite home-5">
    <div class="container nav-container">
        <div class="logo-wrapper navbar-brand ">
            <a href="{{url('/')}}" class="logo main-logo">
                <img src="{{asset('front/img/flower-logo.png')}}" alt="logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="mirex">
            <!-- navbar collapse start -->
            <ul class="navbar-nav">
                <!-- navbar- nav -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">خانه
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">درباره</a>
                </li>
                <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">صفحات</a>
                    <div class="mega-menu-wrapper">
                        <div class="container mega-menu-container">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">صفحات داخلی</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="category.html">دسته بندی</a></li>
                                            <li><a href="cart.html">سبد خرید</a></li>
                                            <li><a href="product-details.html">جزئیات محصول</a></li>
                                            <li><a href="signup.html">ثبت نام</a></li>
                                            <li><a href="sellers-products.html">محصولات پرفروش</a></li>
                                            <li><a href="seller-dashboard.html">صفحه داشبورد</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">دیگر صفحات</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="product_upload.html">آپلود محصول</a></li>
                                            <li><a href="offers.html">تخفیفات</a></li>
                                            <li><a href="invoice.html">صورتحساب</a></li>
                                            <li><a href="vendor-list.html">لیست فروشندگان</a></li>
                                            <li><a href="partners.html">همکاران</a></li>
                                            <li><a href="404.html">404 صفحه</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">دیگر صفحات</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="search.html">جستجو</a></li>
                                            <li><a href="become-affiliats.html">مشارکت کنندگان</a></li>
                                            <li><a href="faq.html">گفت و گو</a></li>
                                            <li><a href="track-orders.html">پیگیری سفارش</a></li>
                                            <li><a href="privacy_policy.html">سیاست حفظ حریم خصوصی</a></li>
                                            <li><a href="contact.html">تماس</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <a href="product-details.html">
                                        <img src="{{asset('front/img/mega-menu.jpg')}}" alt="product image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><!-- mega menu start -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">بلاگ</a>
                    <div class="dropdown-menu">
                        <a href="blog.html" class="dropdown-item">بلاگ</a>
                        <a href="blog-details.html" class="dropdown-item">جزئیات بلاگ</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">تماس</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">ورود</a>
                </li>
            </ul>
            <!-- /.navbar-nav -->
            <div class="right-btn-wrapper">
                <ul>
                    <li class="search" id="search"><i class="fas fa-search"></i> </li>
{{--                    <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i>--}}
{{--                        <span class="badge">12</span>--}}
{{--                    </li>--}}
{{--                    <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>--}}
                </ul>
            </div>
        </div>
        <div class="responsive-mobile-menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- navbar collapse end -->
        <div class="right-btn-wrapper desktop-none">
            <ul>
                <li class="search" id="search"><i class="fas fa-search"></i> </li>
                <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i>
                    <span class="badge">12</span>
                </li>
                <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
            </ul>
        </div>
        <!-- /.navbar btn wrapper -->
    </div>
</nav>
<!-- navbar area end -->

<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="#" class="search-popup-form">
        <div class="form-element">
            <input type="text"  class="input-field" placeholder="جستجو.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>
