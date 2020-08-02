@extends('layouts.adminPanelTemplate')
@section('content')


    <div id="main">
        <div class="row">
            @include('fragment.errors')

            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>دسته بندی ها</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">دسته بندی ها
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div id="popout" class="row">
                            <div class="col s12">
                                <ul class="collapsible popout">
                                    @foreach($categories as $key =>$category)
                                        <li class="">

                                            <div class="collapsible-header grey darken-2 white-text" tabindex="0">{{$key+1 .' - '.$category->title}}
                                                <form action="{{url("admin/shop/category/$category->id/delete")}}" method="post" class="pl-6">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="text" name="type" value="category" class="display-none">
                                                    <button type="submit" class="btn-flat red-text p-0" ><i class="material-icons mr-1">delete</i></button>
                                                </form>
                                            </div>
                                            <div class="collapsible-body p-0" >


                                                <ul class="collapsible collapsible-accordion m-0">
                                                    @foreach($category->child as $childKey =>$child)
                                                        <li>
                                                            <div class="collapsible-header grey lighten-2"><div class="ml-3"></div>{{$childKey+1 .' - '.$child->title}}
                                                                <form action="{{url("admin/shop/category/$child->id/delete")}}" method="post" class="pl-6">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="text" name="type" value="child" class="display-none">
                                                                    <button type="submit" class="btn-flat red-text p-0" ><i class="material-icons mr-1">delete</i></button>
                                                                </form>
                                                            </div>
                                                            <div class="collapsible-body p-0">
                                                                <ul class="collapsible collapsible-accordion">
                                                                    @foreach($child->grandChild as $grandChildKey =>$grandChild)
                                                                        <li>
                                                                            <div class="collapsible-header grey lighten-5"><div class="ml-6"></div>{{$grandChildKey+1 .' - '.$grandChild->title}}
                                                                                <form action="{{url("admin/shop/category/$grandChild->id/delete")}}" method="post" class="pl-6">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <input type="text" name="type" value="grandChild" class="display-none">
                                                                                    <button type="submit" class="btn-flat red-text p-0" ><i class="material-icons mr-1">delete</i></button>
                                                                                </form>
                                                                            </div>
                                                                        </li>
                                                                    @endforeach
                                                                        <li>
                                                                            <div class="collapsible-header yellow-text"><div class="ml-3"></div>+ افزودن زیر شاخه دوم</div>
                                                                            <div class="collapsible-body pl-0 pr-0 pb-0">
                                                                                <form class="ml-5 mr-5" action="{{url('admin/shop/category')}}" method="post">
                                                                                    @csrf
                                                                                    <div class="row">
                                                                                        <div class="input-field col m4 s12">
                                                                                            <input id="titleGrandChild{{$key}}" type="text" name="title" value="{{old('title')}}">
                                                                                            <label class="contact-input" for="titleGrandChild{{$key}}">عنوان زیرشاخه</label>
                                                                                        </div>
                                                                                        <div class="input-field col m4 s12">
                                                                                            <select name="status">
                                                                                                <option  class="contact-input" value="" disabled selected>وضعیت دسته بندی را انتخاب کنید:</option>
                                                                                                <option value="1">فعال</option>
                                                                                                <option value="0">غیر فعال</option>
                                                                                            </select>
                                                                                            <label>وضعیت</label>
                                                                                        </div>
                                                                                        <input type="number" name="parent_id" value="{{$child->id}}" class="display-none">
                                                                                        <button class="btn cyan waves-effect waves-light right" type="submit">ذخیره
                                                                                            <i class="material-icons right">send</i>
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                    @endforeach
                                                        <li>
                                                            <div class="collapsible-header orange-text"><div class="ml-3"></div>+ افزودن زیر شاخه اول</div>
                                                            <div class="collapsible-body pl-0 pr-0 pb-0">
                                                                <form class="ml-5 mr-5" action="{{url('admin/shop/category')}}" method="post">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="input-field col m4 s12">
                                                                            <input id="titleChild{{$key}}" type="text" name="title" value="{{old('title')}}">
                                                                            <label class="contact-input" for="titleChild{{$key}}">عنوان زیر شاخه</label>
                                                                        </div>
                                                                        <div class="input-field col m4 s12">
                                                                            <select name="status">
                                                                                <option  class="contact-input" value="" disabled selected>وضعیت دسته بندی را انتخاب کنید:</option>
                                                                                <option value="1">فعال</option>
                                                                                <option value="0">غیر فعال</option>
                                                                            </select>
                                                                            <label>وضعیت</label>
                                                                        </div>
                                                                        <input type="number" name="parent_id" value="{{$category->id}}" class="display-none">
                                                                        <button class="btn cyan waves-effect waves-light right" type="submit">ذخیره
                                                                            <i class="material-icons right">send</i>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </li>
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach
                                        <li class="">
                                            <div class="collapsible-header red-text" tabindex="0">+ افزودن شاخه اصلی</div>
                                            <div class="collapsible-body pl-0 pr-0 pb-0" >
                                                <form class="ml-5 mr-5" action="{{url('admin/shop/category')}}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="input-field col m4 s12">
                                                            <input id="title1" type="text" name="title" value="{{old('title')}}">
                                                            <label class="contact-input" for="title1">عنوان شاخه اصلی</label>
                                                        </div>
                                                        <div class="input-field col m4 s12">
                                                            <select name="status">
                                                                <option  class="contact-input" value="" disabled selected>وضعیت دسته بندی را انتخاب کنید:</option>
                                                                <option value="1">فعال</option>
                                                                <option value="0">غیر فعال</option>
                                                            </select>
                                                            <label>وضعیت</label>
                                                        </div>
                                                        <input type="number" name="parent_id" value="" class="display-none">
                                                            <button class="btn cyan waves-effect waves-light right" type="submit">ذخیره
                                                                <i class="material-icons right">send</i>
                                                            </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    @endsection
