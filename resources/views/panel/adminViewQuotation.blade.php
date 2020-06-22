@extends('layouts.adminPanelTemplate')
@section('content')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- app invoice View Page -->
                    <section class="invoice-edit-wrapper section">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col xl10 m10 s12">
                                <div class="card">
                                    <div class="card-content px-36">
                                        <!-- header section -->
                                        <div class="row mb-3">
                                            <div class="col xl4 m12 display-flex align-items-center">
                                                <h6 class="invoice-number mr-4 mb-5">فاکتور#</h6>
                                                <p>{{$quotation->id}}</p>
                                            </div>
                                            <div class="col xl8 m12">
                                                <div class="invoice-date-picker display-flex align-items-center">
                                                    <div class="display-flex align-items-center">
                                                        <small> موضوع تاریخ : </small>
                                                        <div class="display-flex ml-4">
                                                            <p>{{$quotation->created_at}}</p>
                                                        </div>
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
                                        <div class="invoice-product-details mb-3">
                                                <div data-repeater-list="group-a">
                                                    <div class="mb-2" data-repeater-item>
                                                        <!-- invoice Titles -->
                                                        <div class="row mb-1">
                                                            <div class="col s4 m1">
                                                                <h6 class="m-0">کالا</h6>
                                                            </div>
                                                            <div class="col s4 m2">
                                                                <h6 class="m-0">نوع ارز</h6>
                                                            </div>
                                                            <div class="col s4 m2">
                                                                <h6 class="m-0">قیمت ارزی</h6>
                                                            </div>
                                                            <div class="col s4 m2">
                                                                <h6 class="m-0">کارمزد</h6>
                                                            </div>
                                                            <div class="col s4 m2">
                                                                <h6 class="m-0">حمل</h6>
                                                            </div>
                                                            <div class="col s4 m2">
                                                                <h6 class="m-0">قیمت</h6>
                                                            </div>
                                                            <div class="col s4 m1">
                                                                <h6 class="m-0"></h6>
                                                            </div>
                                                        </div>
                                                        @include('fragment.errors')
                                                        @foreach($quotation->request as $item)
                                                        <div class=" invoice-item display-flex mb-1">
                                                            <div class="invoice-item-filed row pt-1">
                                                            <form action="{{url("/admin/request/$item->id/store")}}" method="post">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="col m1 s12 input-field">
                                                                    <a href="{{url($item->link)}}" class="btn-floating mb-1 btn-small waves-effect waves-light mr-1" target="_blank"><i class="material-icons">remove_red_eye</i></a>
                                                                </div>
                                                                <div class="col s12 m2 input-field">
                                                                    <select class="invoice-item-select browser-default iransans" name="currency_id">
                                                                        <option value="usd">دلار </option>
                                                                        <option value="euro">یورو </option>
                                                                        <option value="pound">پوند </option>
                                                                        <option value="canada_dollar">دلار کانادا </option>
                                                                        <option value="uae">درهم</option>
                                                                        <option value="tl">لیر</option>
                                                                    </select>

                                                                </div>
                                                                <div class="col m2 s12 input-field">
                                                                    <input type="number" name="item_price" value="{{$item->item_price ?? old('item_price')}}">
                                                                </div>
                                                                <div class="col m2 s12 input-field">
                                                                    <input type="number" name="commission" value="{{$item->commission ?? old('commission')}}">
                                                                </div>
                                                                <div class="col m2 s12 input-field">
                                                                    <input type="number" name="shipping_price" value="{{$item->shipping_price ?? old('shipping_price')}}">
                                                                </div>

                                                                <div class="col m2 s12 input-field">
                                                                    <p>{{$item->customer_price}}</p>
                                                                </div>
                                                                <div class="col m1 s12 input-field">
                                                                    <button type="submit" class="btn-floating mb-1 btn-small waves-effect green mr-1"><i class="material-icons">reply_all</i></button>
                                                                </div>

                                                            </form>
                                                            </div>

                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- invoice subtotal -->
                                        <div class="invoice-subtotal">
                                            <div class="row">
                                                <form action="{{url("/admin/quotation/$quotation->id/update")}}" method="post" id="quotation_form">
                                                    @csrf
                                                    <div class="col m5 s12">
                                                        <div class="input-field">
                                                            <label for="discount_code">کد تخفیف</label>
                                                            <input type="text" class="iransans" value="{{$discount_amount['discount_code']??''}}" id="discount_code" name="discount_code">
                                                        </div>
                                                        <div class="input-field ">
                                                            <label for="description">توضیحات</label>
                                                            <input type="text" class="iransans" value="{{$quotation->description}}" id="description" name="description">
                                                        </div>
                                                    </div>
                                                    <div class="col xl4 m7 s12 offset-xl3">
                                                        <ul>
                                                            <li class="display-flex justify-content-between ">
                                                            <span class="invoice-subtotal-title">جمع جزء :
                                                            </span>
                                                                <h6 class="invoice-subtotal-value"> {{$quotation->price}} تومان  </h6>
                                                            </li>
                                                            <li class="display-flex justify-content-between">
                                                                <span class="invoice-subtotal-title">تخفیف :</span>
                                                                <h6 class="invoice-subtotal-value">{{$quotation->discount}} تومان </h6>
                                                            </li>

                                                            <li>
                                                                <div class="divider mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="display-flex justify-content-between">
                                                                <span class="invoice-subtotal-title">کل فاکتور :</span>
                                                                <h6 class="invoice-subtotal-value">تومان  {{$quotation->total_price}}</h6>
                                                            </li>
                                                            <li class="display-flex justify-content-between">
                                                                <span class="invoice-subtotal-title">پرداخت شده : </span>
                                                                <h6 class="invoice-subtotal-value"> تومان </h6>
                                                            </li>
                                                            <li class="display-flex justify-content-between">
                                                                <span class="invoice-subtotal-title">باقی مانده :</span>
                                                                <h6 class="invoice-subtotal-value">تومان  </h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- invoice action  -->
                            <div class="col xl2 m2 s12">
                                <div class="card invoice-action-wrapper mb-10">
                                    <div class="card-content">
                                        <div class="invoice-action-btn">
                                            <a href="{{url('admin/quotation')}}" class="btn indigo waves-effect waves-light display-flex align-items-center justify-content-center">
                                                <i class="material-icons mr-4">check</i>
                                                <span class="responsive-text">بازگشت</span>
                                            </a>
                                        </div>
{{--                                        <div class="invoice-action-btn">--}}
{{--                                            <a class="btn btn-light-indigo btn-block waves-effect waves-light">--}}
{{--                                                <span class="responsive-text">دانلود فاکتور</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
                                        <div class="invoice-action-btn">
                                            <button form="quotation_form" type="submit" class="btn waves-effect waves-light display-flex align-items-center justify-content-center width-100">
                                                <span class="responsive-text">صدور فاکتور</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


@endsection
