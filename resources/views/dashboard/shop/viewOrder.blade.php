@extends('layouts.cDashboardTemplate')
@section('content')
    <section class="invoice-view-wrapper section">
        <div class="row">
            <!-- invoice view page -->
            <div class="col xl9 m8 s12">
                <div class="card">
                    <div class="card-content invoice-print-area">
                        <!-- header section -->
                        <div class="row invoice-date-number">
                            <div class="col xl4 s12">
                                <span class="invoice-number mr-1">شماره فاکتور : </span>
                                <span>{{$order->id}}</span>
                            </div>
                            <div class="col xl8 s12">
                                <div class="invoice-date display-flex align-items-center flex-wrap">
                                    <div class="mr-3">
                                        <small> تاریخ استعلام :</small>
                                        <span>{{$order->created_at}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- logo and title -->
                        <div class="row mt-3 invoice-logo-title">
                            <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
                                <img src="{{asset('front/img/flower-logo.png')}}" alt="logo" height="100" width="164" />
                            </div>
                            <div class="col m6 s12 pull-m6">
                                <h4 class="indigo-text">فاکتور</h4>
                                <span>توسعه نرم افزار</span>
                            </div>
                        </div>
                        <div class="divider mb-1 mt-1"></div>
                        <!-- invoice address and contact -->
                        <div class="row invoice-info">
                            <div class="col m6 s12">
                                <h6 class="invoice-from">مشخصات کاربر</h6>
                                <div class="invoice-address">
                                    <p>نام : <span>{{$order->user->name}}</span></p>
                                </div>
                                <div class="invoice-address">
                                    <p>تلفن : <span>{{$order->user->tel}}</span></p>
                                </div>
                                <div class="invoice-address">
                                        <p>آدرس : <span>{{$order->user->address}}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="divider mb-1 mt-1"></div>
                        <!-- product details table-->
                        <div class="invoice-product-details">
                            <table class="striped responsive-table">
                                <thead>
                                <tr>
                                    <th>نام کالا</th>
                                    <th>توضیح</th>
                                    <th>تعداد</th>
                                    <th>قیمت واحد</th>
                                    <th>وضعیت</th>
                                    <th class="right-align">قیمت کل</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order->order_item as $key => $item)
                                <tr>
                                    <td><a href="{{url("shop/product/".$item->product->id)}}" >{{$item->product->title ?? ''}}</a> </td>
                                    <td>{{$item->description ?? '-'}}</td>
                                    <td>{{$item->quantity ?? ''}}</td>
                                    <td>{{$item->price ?? ''}} ریال </td>
                                    <td>
                                        @if($product->status == 1)
                                            <span class="chip lighten-5 orange orange-text">فعال</span>
                                        @elseif($product->status == 2)
                                            <span class="chip lighten-5 green green-text">غیرفعال</span>
                                        @endif
                                    </td>
                                    <td class="indigo-text right-align">{{$item->price ?? ''}} ریال </td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- invoice subtotal -->
                        <div class="divider mt-3 mb-3"></div>
                        <div class="invoice-subtotal">
                            <div class="row">
                                <div class="col m5 s12">
                                    <p>از خریدتان متشکریم</p>
                                </div>
                                <div class="col xl4 m7 s12 offset-xl3">
                                    <ul>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">جمع </span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$order->net_price}}  ﷼
                                            </h6>
                                        </li>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">تخفیف</span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$order->discount}} ﷼
                                            </h6>
                                        </li>

                                        <li class="divider mt-2 mb-2"></li>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">جمع کل </span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$order->total_price}} ﷼
                                            </h6>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- invoice action  -->
            <div class="col xl3 m4 s12">
                <div class="card invoice-action-wrapper">
                    <div class="card-content">
                        <div class="invoice-action-btn">
                            <a href="{{url('/shop/order')}}" class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
                                <span class="text-nowrap">بازگشت</span>
                                <i class="material-icons mr-4">arrow_back</i>
                            </a>
                        </div>
                        <div class="invoice-action-btn">
                            <a href="#" class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print " >
                                <span>چاپ</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
