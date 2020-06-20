@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>قیمت ارزها</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('panel')}}">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">قیمت ارزها
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
                                <h4 class="card-title">فرم درون خطی</h4>
                                <form action="{{url('/admin/currencyPrice/score')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">attach_money</i>
                                            <input id="icon_prefix1" type="number" name="usd">
                                            <label class="contact-input" for="icon_prefix1">دلار</label>
                                        </div>
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">euro_symbol</i>
                                            <input id="icon_prefix2" type="number" name="euro">
                                            <label class="contact-input" for="icon_prefix2">یورو</label>
                                        </div>
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">panorama_fish_eye</i>
                                            <input id="icon_prefix3" type="number" name="pound">
                                            <label class="contact-input" for="icon_prefix3">پوند</label>
                                        </div>
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">attach_money</i>
                                            <input id="icon_prefix4" type="number" name="canada_dollar">
                                            <label class="contact-input" for="icon_prefix4">دلار کانادا</label>
                                        </div>
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">more_vert</i>
                                            <input id="icon_prefix5" type="number" name="uae">
                                            <label class="contact-input" for="icon_prefix5">درهم</label>
                                        </div>
                                        <div class="input-field col m2 s6">
                                            <i class="material-icons prefix">format_size</i>
                                            <input id="icon_prefix6" type="number" name="tl">
                                            <label class="contact-input" for="icon_prefix6">لیر</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col m4 s12">
                                            <div class="input-field col s12">
                                                <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                                                    <i class="material-icons left">navigate_before</i> ثبت قیمت
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <th>دلار</th>
                                                        <th>یورو</th>
                                                        <th>پوند</th>
                                                        <th>دلار کانادا</th>
                                                        <th>درهم</th>
                                                        <th>لیر</th>
                                                        <th>حذف</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($currencyPrice as $currency)
                                                        <tr>
                                                            <td>{{$currency->created_at}}</td>
                                                            <td>{{$currency->usd}}</td>
                                                            <td>{{$currency->euro}}</td>
                                                            <td>{{$currency->pound}}</td>
                                                            <td>{{$currency->canada_dollar}}</td>
                                                            <td>{{$currency->uae}}</td>
                                                            <td>{{$currency->tl}}</td>
                                                            <td>
                                                                <form action="{{url("admin/currencyPrice/$currency->id/delete")}}" method="post">
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
                                                        <th>نام</th>
                                                        <th>حالت</th>
                                                        <th>محل کار</th>
                                                        <th>سن</th>
                                                        <th>تاریخ شروع</th>
                                                        <th>حقوق</th>
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
