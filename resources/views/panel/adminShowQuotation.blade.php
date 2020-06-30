@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- app invoice View Page -->
                    <section class="invoice-view-wrapper section">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col m10 s12">
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
                                                <img src="{{asset('images/gallery/ticktock-logo.png')}}" alt="logo" height="36" width="164" />
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
                                                    <th>تغییرات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($quotation->request as $key => $request)
                                                    <tr>
                                                        <p hidden>{{$purchased=$request->purchased}}</p>

                                                        <td>{{$request->link}} </td>
                                                        <td>{{$request->description}}</td>
                                                        <td>{{$request->quantity}}</td>
                                                        <td>{{$request->customer_price}} ریال </td>
                                                        <td class="indigo-text right-align">{{$request->customer_price}} ریال </td>
                                                        <td>
                                                        @if($quotation->status == 4)
                                                            <!-- Modal Trigger -->
                                                            <div class="row ml-1 p-1">
                                                                <a class="waves-effect waves-light invoice-action-view ml-4 modal-trigger" href="{{url("admin/purchasedItem/$purchased->id/edit")}}"><i class="material-icons orange-text">edit</i></a>
                                                                <a class="waves-effect waves-light invoice-action-view mr-4 modal-trigger" href="#modal-{{$key}}"><i class="material-icons green-text">remove_red_eye</i></a>
                                                                <!-- Modal Structure -->
                                                                <div id="modal-{{$key}}" class="modal ">
                                                                    <div class="modal-content">
                                                                        @include('layouts.timeline')
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat">بستن</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @endif
                                                        </td>
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
                            <div class="col m2 s12">
                                <div class="card invoice-action-wrapper">
                                    <div class="card-content">
                                        <div class="invoice-action-btn">
                                            <a href="{{url('/admin/user/view')}}" class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
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
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>




@endsection
