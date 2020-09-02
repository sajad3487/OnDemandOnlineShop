@extends('layouts.adminPanelTemplate')
@section('content')
    <link rel="stylesheet" type="text/css"
          href="{{asset('css-rtl/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('css-rtl/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/form-wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/choose_media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/materialize-stepper/materialize-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">

    <div id="main">
        <div class="row">
            @include('fragment.errors')
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>اضافه نمودن کالای جدید</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('admin/shop/index')}}">کالاها</a>
                                </li>
                                <li class="breadcrumb-item active">اضافه کردن کالای جدید
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-form-wizard">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">لطفا برای ثبت کالای جدید تمامی مراحل را یک به یک تکمیل نموده و
                                    در نهایت ثبت نهایی را انجام دهید</p>
                            </div>
                        </div>

{{--                        add media--}}
                        <div class="card">
                            <div class="card-content">
                                <form action="{{url("admin/shop/media/deletePic")}}" class="row" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn waves-effect waves-light light-green right iransans ml-2" href="{{url('admin/shop/media/create')}}">افزودن تصویر
                                        <i class="material-icons right">add</i>
                                    </a>
                                    <button class="btn waves-effect waves-light light-red right iransans ml-2" type="submit">پاک کردن
                                        <i class="material-icons right">delete</i>
                                    </button>
                                    <h5>گالری تصاویر:</h5>
                                    <div class="collection email-collection padding-1 selected_image mt-2" style="height: 500px; overflow: scroll">
                                        @foreach($pictures as $key=>$picture)
                                            <input type='checkbox' name='picture[]' value='{{$picture->id}}' id="thing-{{$key}}"/>
                                            <label for="thing-{{$key}}" class="mr-1 mb-4 center-align">
                                                <img src="{{asset($picture->file)}}" alt="">
                                                <a href="{{url($picture->file)}}" class="btn btn-light-blue-grey pl-7 pr-7" target="_blank"><i class="material-icons">zoom_in</i></a>
                                                <a href="{{url("admin/shop/media/$picture->id/edit")}}" class="btn btn-light-deep-orange pl-7 pr-7"><i class="material-icons">edit</i></a>
                                            </label>
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="content-overlay"></div>
            </div>

        </div>
    </div>




    <script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>

    <script src="{{asset('js/scripts/form-wizard.min.js')}}"></script>

@endsection

