@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>اطلاعات کاربران</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('panel')}}">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">اطلاعات کاربران
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
                                <h4 class="card-title">یکی از اطلاعات کاربر را وارد نمایید</h4>
                                <form action="{{url('/admin/user/find')}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="input-field col m4 s12">
                                            <i class="material-icons prefix">perm_identity</i>
                                            <input id="icon_prefix1" type="text" name="name">
                                            <label class="contact-input" for="icon_prefix1">نام کاربری</label>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <i class="material-icons prefix">email</i>
                                            <input id="icon_prefix2" type="text" name="email">
                                            <label class="contact-input" for="icon_prefix2">ایمیل کاربر</label>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <i class="material-icons prefix">contact_phone</i>
                                            <input id="icon_prefix3" type="text" name="tel">
                                            <label class="contact-input" for="icon_prefix3">شماره تلفن کاربر</label>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="input-field col s12 center">
                                                <button class="btn cyan waves-effect waves-light center" type="submit" >
                                                    <i class="material-icons left">search</i> جستجو
                                                </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card blue-grey darken-2">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">مشاهده پیشفاکتور</span>
                        <div class="border-non mt-5">
                            <form action="{{url('/admin/quotation/view')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="quotation_number" type="number" name="quotation_number">
                                        <label class="contact-input" for="quotation_number">شماره پبشفاکتور</label>
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card blue-grey darken-4">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">مشاهده فاکتور بر اساس تاریخ</span>
                        <div class="border-non mt-5">
                            <form action="{{url('#')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="quotation_date" type="date" name="quotation_date">
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card blue-grey darken-5">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">مشاهده پرداخت بر اساس تاریخ</span>
                        <div class="border-non mt-5">
                            <form action="{{url('#')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="payment_date" type="date" name="payment_date">
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
