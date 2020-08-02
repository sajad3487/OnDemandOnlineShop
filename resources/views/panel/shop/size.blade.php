@extends('layouts.adminPanelTemplate')
@section('content')

    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>سایز ها</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">سایز ها
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
                            <div class="card-content p-0">
                                <div class="row">
                                    <form class="col s12" action="{{url('admin/shop/size/store')}}" method="post">
                                        @csrf
                                        <div class="input-field col s12 m3">
                                        </div>
                                        <div class="input-field col s12 m3">
                                            <input id="title" name="title" type="text" class="validate">
                                            <label for="title">عنوان سایز :</label>
                                        </div>
                                        <div class="input-field col s12 m3 mt-2">
                                            <button class="btn waves-effect waves-light right submit" type="submit">ذخیره
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
                                                    <h4 class="card-title">لیست سایز های موجود</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="view-12-columns">
                                            <div class="row">
                                                    <div class="col s12">
                                                        @foreach($sizes as $size)
                                                        <div class="col s3 m1 grid-example border-radius-1 ml-1" style="background-color: white;">
                                                            <span class="flow-text">
                                                                <form action="{{url("/admin/shop/size/$size->id/delete")}}" method="post" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <h6 class="blue-grey-text">{{$size->title}}</h6>
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
