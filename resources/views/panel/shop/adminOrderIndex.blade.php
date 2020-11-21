@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">

                        <section class="invoice-list-wrapper section">
                            <h4 class="white-text">دفتر خارجی</h4>
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
                                        <th>تاریخ خرید</th>
                                        <th>مبلغ</th>
                                        <th>نام مشتری</th>
                                        <th>توضیحات</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @isset($orders)
                                        @foreach($orders as $order)
                                            <tr>
                                                <td></td>
                                                <td> </td>
                                                <td>{{$order->id ?? '-'}}</td>
                                                <td><small>{{$order->created_at ?? '-'}}</small></td>
                                                <td><span class="invoice-amount">{{$order->total_price ?? '-'}}</span></td>
                                                <td><span >{{$order->user->name ?? '-'}}</span></td>
                                                <td><span class="invoice-customer"><small>{{$order->description ?? '-'}}</small></span></td>
                                                <td>
                                                    @if($order->status == 1)
                                                        <span class="chip lighten-5 orange orange-text">پرداخت شده</span>
                                                    @elseif($order->status == 2)
                                                        <span class="chip lighten-5 red red-text">درحال آماده سازی</span>
                                                    @elseif($order->status == 3)
                                                        <span class="chip lighten-5 green green-text">ارسال شده</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="invoice-action">
                                                        <a href="{{url("/admin/shop/order/$order->id/edit/")}}" class="invoice-action-view mr-4">
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
