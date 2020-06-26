@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">

                        <section class="invoice-list-wrapper section">
                            <h4 class="white-text">ارسال به مشتری</h4>
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
                                        <th>تاریخ پرداخت</th>
                                        <th>نام کالا</th>
                                        <th>نام مشتری</th>
                                        <th>ایمیل مشتری</th>
                                        <th>تعداد</th>
                                        <th>صدور</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @isset($items)
                                        @foreach($items as $item)
                                            <tr>
                                                <td></td>
                                                <td> </td>
                                                <td>{{$item->quotation->id}}</td>
                                                <td><span class="invoice-amount">{{$item->quotation->payment_date}}</span></td>
                                                <td><small>{{$item->name}}</small></td>
                                                <td><span class="invoice-customer"><small>{{$item->quotation->user->name}}</small></span></td>
                                                <td>
                                                    <span class="bullet red"></span>
                                                    <small>{{$item->quotation->user->email}}</small>
                                                </td>
                                                <td>{{$item->request->quantity}}</td>
                                                <td>
                                                    <div class="invoice-action">
                                                        <a href="{{url("/admin/purchasedItem/$item->id/edit")}}" class="invoice-action-view mr-4">
                                                            <i class="material-icons green-text">remove_red_eye</i>
                                                        </a>
                                                        <input type="number" value="{{$user_id=$item->quotation->user->id}}" class="display-none">
                                                        <a href="{{url("/admin/user/$user_id/view")}}" target="_blank" class="invoice-action-view mr-4">
                                                            <i class="material-icons orange-text">info_outline</i>
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
