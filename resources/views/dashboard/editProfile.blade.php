@extends('layouts.cDashboardTemplate')

@section('content')

    <div class="content-wrapper-before blue-grey lighten-5"></div>
    <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="breadcrumbs-title"><span>تنظیمات حساب کاربری</span></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <!-- Account settings -->
            <section class="tabs-vertical mt-1 section">
                <div class="row">
                    <div class="col l12 s12">
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
                                                <input id="icon_name" type="text" name="name" disabled class="validate pl-4" value="{{$user->name}}">
                                                <label for="icon_name " class="pl-4"> نام کاربر</label>
                                            </div>
                                            <div class="input-field col s12 m4">
                                                <i class="material-icons prefix">email</i>
                                                <input id="icon_email" type="email" name="email" disabled class="validate  pl-4" value="{{$user->email}}">
                                                <label for="icon_email" class="pl-4">ایمیل</label>
                                            </div>
                                            <div class="input-field col s12 m4">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="icon_telephone" type="text" name="tel" class="validate pl-4" value="{{old('tel') ?? $user->tel}}">
                                                <label for="icon_telephone" class="pl-4">تلفن</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix ">account_circle</i>
                                                <input id="icon_address" type="text" name="address" class="validate pl-2" value="{{old('address')?? $user->address}}">
                                                <label for="icon_address " class="pl-2"> آدرس</label>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col s12 display-flex justify-content-end form-action">
                                            <a href="#" class="btn cyan waves-effect waves-light mr-2 iransans">
                                                تغییر پسورد
                                            </a>
                                            <button type="submit" class="btn indigo waves-effect waves-light mr-2 iransans">
                                                ذخیره تغییرات
                                            </button>
                                        </div>
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


@endsection
