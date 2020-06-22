@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>پیشفاکتورهای صادر نشده</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">جدول</a>
                                </li>
                                <li class="breadcrumb-item active">جدول داده
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section ">
                        <!-- DataTables example -->
                        <section class="invoice-list-wrapper section">
                            <div class="invoice-create-btn">
                                <a href="{{url('/quotation/create')}}" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                    <i class="material-icons">add</i>
                                    <span class="hide-on-small-only">ایجاد فاکتور</span>
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
                                        <th>تارخ پرداخت</th>
                                        <th>نوع ارز</th>
                                        <th>قیمت ارزی</th>
                                        <th>تعداد</th>
                                        <th>نام مشتری</th>
                                        <th>ایمیل مشتری</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @isset($purchasedItem)
                                        @foreach($purchasedItem as $purchased)
                                            <tr>
                                                <td></td>
                                                <td> </td>
                                                <td>
                                                    {{$purchased->quotation_id}}
                                                </td>
                                                <td><span class="invoice-amount">{{$purchased->quotation->payment_date}}</span></td>
                                                <td><small>{{$purchased->request->currency_id}}</small></td>
                                                <td><span class="invoice-customer"><small>{{$purchased->request->item_price}}</small></span></td>
                                                <td>
                                                    <span class="bullet red"></span>
                                                    <small>{{$purchased->request->quantity}}</small>
                                                </td>
                                                <td>{{$purchased->quotation->user->name}}</td>
                                                <td>{{$purchased->quotation->user->email}}</td>
                                                <td>
                                                    <div class="invoice-action">
                                                        <a href="{{url("/quotation/purchased/$purchased->id/view")}}" class="invoice-action-view mr-4">
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
                    <!-- START RIGHT SIDEBAR NAV -->


                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('js/scripts/data-tables.min.js')}}"></script>
    <script src="{{asset('js/vendors.min.js')}}"></script>

@endsection
