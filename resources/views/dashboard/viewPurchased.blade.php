@extends('layouts.cDashboardTemplate')
@section('content')
    <div class="row">
        <div class="s8 m8 l8">

        </div>
        <div class="s4 m4 l4">

        </div>

    </div>
    <section class="invoice-view-wrapper section">
        <div class="row">
            <!-- invoice view page -->
            <div class="col xl6 m6 s12">
                <div class="card">
                    <div class="card-content invoice-print-area">
                        <!-- header section -->
                        <div class="row invoice-date-number">
                            <div class="col xl4 s12">
                                <span class="invoice-number mr-1">شماره فاکتور : </span>
                                <span>{{$quotation->id}}</span>
                            </div>
                            <div class="col xl8 s12">
                                <div class="invoice-date display-flex align-items-center flex-wrap">
                                    <div class="mr-3">
                                        <small> تاریخ استعلام :</small>
                                        <span>{{$quotation->created_at}}</span>
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
                                    <p>نام : <span>{{$quotation->user->name}}</span></p>
                                </div>
                                <div class="invoice-address">
                                    <p>تلفن : <span>{{$quotation->user->tel}}</span></p>
                                </div>
                                <div class="invoice-address">
                                    <p>آدرس : <span>{{$quotation->user->address}}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="divider mb-1 mt-1"></div>
                        <!-- product details table-->
                        <div class="invoice-product-details">
                            <table class="striped responsive-table">
                                <thead>
                                <tr>
                                    <th>لینک</th>
                                    <th>توضیح</th>
                                    <th>تعداد</th>
                                    <th>قیمت واحد</th>
                                    <th class="right-align">قیمت کل</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quotation->request as $request)
                                    <tr>
                                        <td>{{$request->link}} </td>
                                        <td>{{$request->description}}</td>
                                        <td>{{$request->quantity}}</td>
                                        <td>{{$request->customer_price}} ریال </td>
                                        <td class="indigo-text right-align">{{$request->customer_price}} ریال </td>
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
                                    <p>از کسب و کارتان متشکریم</p>
                                </div>
                                <div class="col xl4 m7 s12 offset-xl3">
                                    <ul>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">جمع </span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$quotation->price}}  ﷼
                                            </h6>
                                        </li>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">تخفیف</span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$quotation->discount}} ﷼
                                            </h6>
                                        </li>

                                        <li class="divider mt-2 mb-2"></li>
                                        <li class="display-flex justify-content-between">
                                            <span class="invoice-subtotal-title">جمع کل </span>
                                            <h6 class="invoice-subtotal-value">
                                                {{$quotation->total_price}} ﷼
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
            <div class="col xl6 m6 s12">
                <div class="card">
                    <div class="card-content invoice-print-area">
                        <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                            <!-- Search for small screen-->
                            <div class="container">
                                <div class="row ">
                                    <div class="col s12 m12 l12 mb-6">
                                        <h5 class="breadcrumbs-title"><span>وضعیت سفارش</span></h5>
                                    </div>
                                    <div class="col s12 m12 l12 mb-3">
                                        <h6 class="grey-text"><span>شما می توانید وضعیت کالای خود را از اینجا ملاحظه فرمایید</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col s12">
                    <!-- timeline -->

                    <!-- / timeline -->

                                                <div class="content-overlay"></div>
{{--                    {{$quotation->purchased->status}}--}}
                </div>
            </div>

        </div>
    </section>

    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/page-timeline.min.css')}}">

@endsection
