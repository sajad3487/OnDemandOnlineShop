@extends('layouts.adminPanelTemplate')
@section('content')

    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>تنظیمات حساب</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">صفحات</a>
                                </li>
                                <li class="breadcrumb-item active">تنظیمات حساب صفحه
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Account settings -->
                    <section class="tabs-vertical mt-1 section">
                        <div class="row">
                            <div class="col l4 s12">
                                <!-- tabs  -->
                                <div class="card-panel">
                                    <ul class="tabs">
                                        <li class="tab">
                                            <a href="#general">
                                                <i class="material-icons">brightness_low</i>
                                                <span>مشخصات کاربر</span>
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#change-password">
                                                <i class="material-icons">lock_open</i>
                                                <span>فاکتورها</span>
                                            </a>
                                        </li>

                                        <li class="tab">
                                            <a href="#social-link">
                                                <i class="material-icons">chat_bubble_outline</i>
                                                <span>تیکت ها </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col l8 s12">
                                <!-- tabs content -->
                                <div id="general">
                                    <div class="card-panel">
                                        <form class="formValidate" method="post" action="{{url('/editProfile')}}">

                                            <div class="display-flex">
                                                <div class="media">
                                                    <img src="{{/*asset($user->pic) ??*/ asset('images/avatar/avatar-12.png')}}" class="border-radius-4"
                                                         alt="profile image" height="64" width="64">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <div class="upfilewrapper">
                                                        <input id="upfile" type="file"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider mb-1 mt-1"></div>
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12 m4">
                                                    <i class="material-icons prefix mr-5">account_circle</i>
                                                    <input id="icon_name" type="text" name="name" disabled class="validate pl-4" value="{{$user->name ?? ''}}">
                                                    <label for="icon_name " class="pl-4"> نام کاربر</label>
                                                </div>
                                                <div class="input-field col s12 m4">
                                                    <i class="material-icons prefix">email</i>
                                                    <input id="icon_email" type="email" name="email" disabled class="validate  pl-4" value="{{$user->email ?? ''}}">
                                                    <label for="icon_email" class="pl-4">ایمیل</label>
                                                </div>
                                                <div class="input-field col s12 m4">
                                                    <i class="material-icons prefix">phone</i>
                                                    <input id="icon_telephone" type="text" name="tel" class="validate pl-4" value="{{old('tel') ?? $user->tel ?? ''}}">
                                                    <label for="icon_telephone" class="pl-4">تلفن</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix ">account_circle</i>
                                                    <input id="icon_address" type="text" name="address" class="validate pl-2" value="{{old('address')?? $user->address ?? ''}}">
                                                    <label for="icon_address " class="pl-2"> آدرس</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 display-flex justify-content-end form-action">

                                                    <a href="#" type="submit" class="btn green waves-effect waves-light mr-2 iransans">
                                                        فعال کردن کاربر
                                                    </a>
                                                    <button type="submit" class="btn indigo waves-effect waves-light mr-2 iransans">
                                                        ذخیره تغییرات
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="change-password">
                                    <div class="card-panel">
                                        <section class="invoice-list-wrapper section">

                                            <div class="responsive-table">
                                                <table class="table invoice-data-table white border-radius-4 pt-1 center">
                                                        <thead>
                                                        <tr>
                                                            <!-- data table responsive icons -->
                                                            <th></th>
                                                            <!-- data table checkbox -->
                                                            <th></th>
                                                            <th>
                                                                <span>فاکتور#</span>
                                                            </th>
                                                            <th>قیمت کل</th>
                                                            <th>تاریخ</th>
                                                            <th>آخرین بروز رسانی</th>
                                                            <th>تاریخ پرداخت</th>
                                                            <th>وضعیت</th>
                                                            <th>مشاهده</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @isset($user->quotation)
                                                            @foreach($user->quotation as $quotation)
                                                                <tr>
                                                                    <td></td>
                                                                    <td> </td>
                                                                    <td>
                                                                        {{$quotation->id}}
                                                                    </td>
                                                                    <td><span class="invoice-amount">{{$quotation->price}}</span></td>
                                                                    <td><small>{{$quotation->created_at}}</small></td>
                                                                    <td><span class="invoice-customer"><small>{{$quotation->updated_at}}</small></span></td>
                                                                    <td>
                                                                        <small>{{$quotation->payment_date ?? 'پرداخت نشده'}}</small>
                                                                    </td>
                                                                    <td>
                                                                        @if($quotation->status == 2)
                                                                            <span class="chip lighten-5 orange orange-text">صادر شده</span>
                                                                        @elseif($quotation->status == 4)
                                                                            <span class="chip lighten-5 green green-text">پرداخت شده</span>
                                                                        @elseif($quotation->status == 1)
                                                                            <span class="chip lighten-5 red red-text">صادر نشده</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <div class="invoice-action">
                                                                            <a href="
                                                                                    {{url("/admin/quotation/view/$quotation->id")}}" class="invoice-action-view mr-4">
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
                                <div id="social-link">
                                    <div class="card-panel">
                                        <form>
                                            <div class="row">

                                            </div>
                                        </form>
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

    <script src="{{url('js/scripts/page-account-settings.min.js')}}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css-rtl/pages/page-account-settings.min.css')}}">


@endsection
