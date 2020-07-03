@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">

                        <section class="invoice-list-wrapper section">
                            <h4 class="white-text">گزارش گیری</h4>
                            <p class="white-text right"> تعداد : {{$count}}</p>
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
                                        <th>تاریخ صدور</th>
                                        <th>نام مشتری</th>
                                        <th>ایمیل مشتری</th>
                                        <th>مبلغ فاکتور</th>
                                        <th>کد تخفیف</th>
                                        <th>ویرایش</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @isset($items)
                                        @foreach($items as $item)
                                            <tr>
                                                <td></td>
                                                <td> </td>
                                                <td>{{$item->id}}</td>
                                                <td><span class="invoice-amount">{{$item->created_at}}</span></td>
                                                <td><span class="invoice-customer"><small>{{$item->user->name}}</small></span></td>
                                                <td><small>{{$item->user->email}}</small></td>
                                                <td>
                                                    <small>{{$item->total_price}}</small>
                                                </td>
                                                <td>{{$item->discount_code}}</td>
                                                <td>
                                                    <div class="invoice-action">
                                                        <a href="{{url("/admin/quotation/view/$item->id")}}" class="invoice-action-view mr-4">
                                                            <i class="material-icons green-text">remove_red_eye</i>
                                                        </a>
                                                        <input type="number" value="{{$user_id = $item->user->id}}" class="display-none">
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
