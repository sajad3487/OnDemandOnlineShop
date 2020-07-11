@extends('layouts.adminPanelTemplate')
@section('content')

    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>رنگ ها</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">رنگ ها
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">

                                <p class="caption mb-3">برای اضافه کردن رنگ جدید از منوی زیر انتخاب کنید و دکمه افزودن را فشار دهید</p>


                                    <form class="col s12" action="{{url('admin/shop/color/store')}}" method="post">
                                        @csrf
                                        <div class="input-field col s4">
                                            اضافه کردن رنگ :
                                            <input id="code" name="code" type="color" class="validate ml-4">
                                        </div>
                                        <div class="input-field col s4">
                                            <input id="name" name="name" type="text" class="validate">
                                            <label for="name">نام رنگ :</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <button class="btn waves-effect waves-light right submit" type="submit">افزودن
                                            <i class="material-icons right">send</i>
                                        </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>


                        <!--12 Columns-->
                        <div class="row">
                            <div class="col s12">
                                <div id="12-columns" class="card card-tabs">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">لیست رنگ های موجود</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-12-columns">
                                            <div class="row">
                                                    <div class="col s12">
                                                        @foreach($colors as $color)
                                                        <div class="col s2 grid-example" style="background-color: {{"#".$color->code}}">
                                                            <span class="flow-text">
                                                                <form action="{{url("/admin/shop/color/$color->id/delete")}}" method="post" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <h6 class="white-text">{{$color->name}}</h6>
                                                                    <button class="mb-6 btn-floating waves-effect waves-light red lightrn-1" type="submit">
                                                                        <i class="material-icons">clear</i>
                                                                    </button>
                                                                </form>
                                                            </span>
                                                        </div>
                                                        @endforeach

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>




@endsection
