@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!--card stats start-->
                        <div id="card-stats" class="pt-0">
                            <div class="row">
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">perm_identity</i>
                                                    <p>تعداد کل مشتریان</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">{{$customer_number ?? ''}}</h5>
                                                    <p class="no-margin">نفر</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">add_shopping_cart</i>
                                                    <p>استعلام های صادرنشده</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">{{$quotation_number ?? ''}}</h5>
                                                    <p class="no-margin">جدید</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">attach_money</i>
                                                    <p>سفارشات پرداخت شده</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <p class="no-margin">{{$paid_number ?? ''}}</p>
                                                    <p>جدید</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">timeline</i>
                                                    <p>سفارشات جدید</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">{{$order_number ?? ''}}</h5>
                                                    <p class="no-margin">جدید</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--card stats end-->

                        <!--yearly & weekly revenue chart start-->
                        <div id="sales-chart">
                            <div class="row">
                                <div class="col s12 m8 l8">
                                    <div id="revenue-chart" class="card animate fadeUp">
                                        <div class="card-content">
                                            <h4 class="header mt-0">
                                                قیمت محاسبه ارزها
                                                <span class="purple-text small text-darken-1 ml-1">
                                                <a href="{{url('admin/currencyPrice')}}" class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">تغییر قیمت ارز</a>
                                            </h4>
                                            <div class="row">
                                                <div class="col s12">

                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>نوع ارز</th>
                                                            <th>قیمت</th>
                                                            <th>تاریخ</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>دلار</td>
                                                            <td>    {{$currency->usd ?? ''}} تومان </td>
                                                            <td>{{$currency->created_at ?? ''}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>یورو</td>
                                                            <td>{{$currency->euro ?? ''}}  تومان  </td>
                                                            <td>{{$currency->created_at ?? ''}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>پوند</td>
                                                            <td>{{$currency->pound ?? ''}}  تومان  </td>
                                                            <td>{{$currency->created_at ?? ''}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>دلار کانادا</td>
                                                            <td>{{$currency->canada_dollar ?? ''}}  تومان  </td>
                                                            <td>{{$currency->created_at ?? ''}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>درهم</td>
                                                            <td> {{$currency->uae ?? ''}} تومان  </td>
                                                            <td>{{$currency->created_at ?? ''}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>لیر</td>
                                                            <td> {{$currency->tl ?? ''}} تومان  </td>
                                                            <td>{{$currency->created_at ?? '' ?? ''}}</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4">
                                    <div id="weekly-earning" class="card animate fadeUp">
                                        <div class="card-content">
                                            <h4 class="header m-0">درآمد <i class="material-icons right grey-text lighten-3">more_vert</i></h4>
                                            <p class="no-margin grey-text lighten-3 medium-small">دوشنبه 15 - یکشنبه 21</p>
                                            <h3 class="header">8990 تومان <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                                            </h3>
                                            <canvas id="monthlyEarning" class="" height="150"></canvas>
                                            <div class="center-align">
                                                <p class="lighten-3">کل درآمد هفتگی</p>
                                                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">مشاهده کامل</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--yearly & weekly revenue chart end-->

                        <!-- ecommerce product start-->
                        <div id="ecommerce-product">

                            <!-- ecommerce offers start-->
                            <div id="ecommerce-offer">
                                <div class="row">
                                    <a href="{{url('admin/shop/index')}}">
                                        <div class="col s12 m3">
                                            <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                                                <div class="card-content center">
                                                    <img src="{{asset('images/icon/apple-watch.png')}}" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                                                    <h5 class="white-text lighten-4">لیست کالاها</h5>
                                                    <p class="white-text lighten-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('admin/shop/index')}}">
                                        <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <img src="{{asset('/images/icon/printer.png')}}" class="width-40 border-round z-depth-5 responsive-img" alt="images" />
                                                <h5 class="white-text lighten-4">سفارشات</h5>
                                                <p class="white-text lighten-4"></p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                    <a href="{{url('admin/quotation')}}">
                                        <div class="col s12 m3">
                                            <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                                                <div class="card-content center">
                                                    <img src="{{asset('/images/icon/laptop.png')}}" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                                                    <h5 class="white-text lighten-4">استعلام ها صادر نشده</h5>
                                                    <p class="white-text lighten-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{url('admin/purchasedItem/paid')}}">
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <img src="{{asset('/images/icon/bowling.png')}}" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                                                <h5 class="white-text lighten-4">سفارشات پرداخت شده</h5>
                                                <p class="white-text lighten-4"></p>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- ecommerce offers end-->

                        </div>
                        <!--end container-->
                    </div>

                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>



@endsection
