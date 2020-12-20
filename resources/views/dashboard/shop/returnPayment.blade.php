@extends('layouts.cDashboardTemplate')
@section('content')

    <div class="section" id="faq">
        <div class="row">
            <div class="col s12">
                <div id="faq-search" class="card z-depth-0 faq-search-image center-align p-35">
                    <div class="card-content" style="min-height: 350px">
                        @if($status == "success")
                        <img src="{{asset('images/01.png')}}" alt="" style="width: 200px">
                        <h5 class="green-text">
                            پرداخت شما با موفقیت انجام شد
                        </h5>
                            @else
                            <img src="{{asset('images/02.png')}}" alt="" style="width: 200px">
                            <h5 class="red-text">
                                پرداخت شما ناموفق بود
                            </h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="faq row">
            <div class="col s12 m6 l3">
                <a class="black-text" href="{{url('/')}}">
                    <div class="card z-depth-0 grey lighten-3 faq-card">
                        <div class="card-content center-align">
                            <i class="material-icons dp48 orange-text">line_weight</i>
                            <h6><b>صفحه اصلی</b></h6>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l3">
                <a class="black-text" href="{{url('/shop/order')}}">
                    <div class="card z-depth-0 grey lighten-3 faq-card">
                        <div class="card-content center-align">
                            <i class="material-icons dp48 red-text">content_copy</i>
                            <h6><b>لیست سفارشات فوری</b></h6>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l3">
                <a class="black-text" href="{{url('/quotation/create')}}">
                    <div class="card z-depth-0 grey lighten-3 faq-card">
                        <div class="card-content center-align">
                            <i class="material-icons dp48 green-text">chat_bubble_outline</i>
                            <h6><b>استعلام جدید</b></h6>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col s12 m6 l3">
                <a class="black-text" href="{{url('/viewProfile')}}">
                    <div class="card z-depth-0 grey lighten-3 faq-card">
                        <div class="card-content center-align">
                            <i class="material-icons dp48 blue-text">fingerprint</i>
                            <h6><b>مشخصات کاربر</b></h6>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>



    <script src="{{asset('/js/scripts/advance-ui-carousel.min.js')}}"></script>
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('/css-rtl/themes/vertical-gradient-menu-template/materialize.min.css')}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('/css-rtl/themes/vertical-gradient-menu-template/style.min.css')}}">--}}


@endsection

