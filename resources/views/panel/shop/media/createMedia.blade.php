@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                @include('fragment.errors')

                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>افزودن تصویر جدید:</span></h5>
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

                                    <form class="col s12" action="
                                        @if(!isset($picture))
                                            {{url('admin/shop/media')}}
                                        @else
                                            {{url("admin/shop/media/$picture->id/update")}}
                                        @endif
                                        " method="post" enctype="multipart/form-data">
                                        @csrf

                                        @if(isset($picture))
                                            @method('PUT')
                                        @endif
                                        <div class="input-field col m4">
                                            <input id="title" name="title" type="text" class="validate" value="{{old('title') ?? $picture->title ?? ''}}">
                                            <label for="title">عنوان تصویر :</label>
                                        </div>
                                        <div class="input-field col m8">
                                            <input id="caption" name="caption" type="text" class="validate" value="{{old('caption') ?? $picture->caption ?? ''}}">
                                            <label for="caption">متن توضیح :</label>
                                        </div>
                                        <div class="input-field col m4">
                                            <input id="alternative_text" name="alternative_text" type="text" class="validate" value="{{old('alternative_text') ?? $picture->alternative_text ?? ''}}" >
                                            <label for="alternative_text">متن جایگزین :</label>
                                        </div>
                                        <div class="file-field input-field col m4">
                                            <div class="btn float-right">
                                                <span>بارگذاری فایل</span>
                                                <input type="file" name="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                        <div class="input-field">
                                            <button class="btn waves-effect green right submit  mt-3" type="submit">افزودن
                                            <i class="material-icons right">add</i>
                                        </button>
                                        </div>
                                    </form>
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
