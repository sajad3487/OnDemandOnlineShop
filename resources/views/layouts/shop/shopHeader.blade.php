<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-wite home-5">
    <div class="container nav-container">
        <div class="logo-wrapper navbar-brand ">
            <a href="{{url('/')}}" class="logo main-logo">
                <img src="{{asset('front/img/flower-logo.png')}}" style="max-height: 100px" alt="logo">
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
                    <a class="nav-link" href="{{url('/blog/about')}}">درباره ما</a>
                </li>
                <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">محصولات</a>
                    <div class="mega-menu-wrapper">
                        <div class="container mega-menu-container">
                            <div class="row">
                                @foreach($categories as $category)
                                    @if($category->id != 1)
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="mega-menu-columns">
                                                <h6 class="title">{{$category->title}}</h6>
                                                <ul class="menga-menu-page-links">
                                                    @foreach($category->child as $child)
                                                        <li><a href="{{url("shop/category/$child->id")}}">{{$child->title}}<i class="material-icons" style="font-size: 12px">chevron_left</i></a></li>
                                                        @foreach($child->grandChild as $grandChild)
                                                            <li><a href="{{url("shop/category/$grandChild->id")}}"> --- {{$grandChild->title}}</a></li>
                                                        @endforeach
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach

                            </div>
                        </div>
                    </div>
                </li><!-- mega menu start -->
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{url('/blog')}}">بلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/blog/rules')}}">قوانین و مقررات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/blog/contact')}}"> تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/home')}}">ناحیه کاربری</a>
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
