@extends('layouts.adminPanelTemplate')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/form-wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/materialize-stepper/materialize-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">

    <div id="main">
        <div class="row">

            <div class="container">
                <div class="section">
                    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                        <!-- Search for small screen-->
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <h5 class="breadcrumbs-title"><span>کالاهای فروشگاه</span></h5>
                                </div>
                                <div class="col s12 m6 l6 right-align-md">
                                    <ol class="breadcrumbs mb-0">
                                        <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                        </li>
                                        <li class="breadcrumb-item active">کالاها
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="invoice-list-wrapper section">
                        <div class="invoice-create-btn">
                            <a href="{{url('/admin/shop/create')}}" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">کالای جدید</span>
                            </a>
                        </div>
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead>
                                <tr>
                                    <!-- data table responsive icons -->
                                    <th></th>
                                    <!-- data table checkbox -->
                                    <th></th>
                                    <th>
                                        <span>فاکتور#</span>
                                    </th>
                                    <th>نام کالا</th>
                                    <th>برند</th>
                                    <th>قیمت</th>
                                    <th>تخفیف</th>
                                    <th>زمان تحویل</th>
                                    <th>موجودی</th>
                                    <th>وضعیت</th>
                                    <th>ویرایش</th>
                                </tr>
                                </thead>

                                <tbody>
                                @isset($products)
                                    @foreach($products as $product)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                {{$product->id}}
                                            </td>
                                            <td><span class="invoice-amount">{{$product->title}}</span></td>
                                            <td><span class="invoice-amount">{{$product->brand}}</span></td>
                                            <td><span class="invoice-amount">{{$product->final_price}}</span></td>
                                            <td><small>{{$product->discount}}</small></td>
                                            <td><span class="invoice-customer"><small>{{$product->delivery_time}}</small></span></td>
                                            <td>
                                                @if($product->stock <= 2)
                                                <span class="bullet red"></span>
                                                @endif
                                                <small>{{$product->stock}}</small>
                                            </td>
                                            <td>
                                                @if($product->status == 2)
                                                    <span class="chip lighten-5 orange orange-text">صادر شده</span>
                                                @elseif($product->status == 4)
                                                    <span class="chip lighten-5 green green-text">پرداخت شده</span>
                                                @elseif($product->status == 1)
                                                    <span class="chip lighten-5 red red-text">صادر نشده</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="invoice-action">
                                                    <a href="
                                                        @if($product->status == 4)
                                                            {{url("/quotation/purchased/$product->id/view")}}" class="invoice-action-view mr-4">
                                                        @else
                                                            {{url("/quotation/$product->id/view")}}" class="invoice-action-view mr-4">
                                                        @endif
                                                        <i class="material-icons green-text">remove_red_eye</i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endisset
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>

    <script src="{{asset('js/scripts/form-wizard.min.js')}}"></script>

@endsection
