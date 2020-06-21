@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>کد تخفیف ها</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('panel')}}">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">کد تخفیف
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="card">
                            <div class="card-content">
                                <form action="{{url('/admin/discount/store')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col m3 s6">
                                            <i class="material-icons prefix">loyalty</i>
                                            <input id="icon_prefix1" type="text" name="discount_code">
                                            <label class="contact-input" for="icon_prefix1">کد تخفیف</label>
                                        </div>
                                        <div class="input-field col m3 s6">
                                            <i class="material-icons prefix">backspace</i>
                                            <input id="percentage" type="text" name="percentage">
                                            <label class="contact-input" for="percentage">درصد تخفیف</label>
                                        </div>
                                        <div class="input-field col m3 s6">
                                            <i class="material-icons prefix">date_range</i>
                                            <input id="icon_prefix2" type="date" name="discount_expiration">
                                            <label class="contact-input" for="icon_prefix2">تاریخ انقضا</label>
                                        </div>
                                        <div class="input-field col m3 s6">
                                            <i class="material-icons prefix">first_page</i>
                                            <input id="icon_prefix3" type="number" name="limit">
                                            <label class="contact-input" for="icon_prefix3">سقف تخفیف</label>
                                        </div>
                                            <button class="btn cyan waves-effect waves-light right" type="submit">
                                                <i class="material-icons left">navigate_before</i> ثبت کد تخفیف
                                            </button>
                                    </div>
{{--                                    <div class="row">--}}
{{--                                        <div class="input-field col m4 s12">--}}
{{--                                            <div class="input-field col s12">--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </form>
                            </div>
                        </div>
                        <!-- DataTables example -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="button-trigger" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">قیمت های گذشته</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="data-table-simple" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>تاریخ</th>
                                                        <th>کد تخفیف</th>
                                                        <th>درصد تخفیف</th>
                                                        <th>تاریخ انقضا</th>
                                                        <th>سقف تخفیف</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($discounts as $discount)
                                                        <tr>
                                                            <td>{{$discount->created_at}}</td>
                                                            <td>{{$discount->discount_code}}</td>
                                                            <td>{{$discount->percentage}}</td>
                                                            <td>{{$discount->discount_expiration}}</td>
                                                            <td>{{$discount->limit}}</td>
                                                            <td>
                                                                <form action="{{url("admin/discount/$discount->id/delete")}}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn-flat"><i
                                                                            class="material-icons red-text">delete</i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tfoot>
                                                    <tr>
                                                        <th>تاریخ</th>
                                                        <th>کد تخفیف</th>
                                                        <th>درصد تخفیف</th>
                                                        <th>تاریخ انقضا</th>
                                                        <th>سقف تخفیف</th>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
