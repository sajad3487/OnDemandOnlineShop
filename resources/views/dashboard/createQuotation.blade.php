@extends('layouts.cDashboardTemplate')
@section('content')


        <!-- Current balance & total transactions cards-->
        <div class="row vertical-modern-dashboard col l4 s12">

            <div class="col s12 animate fadeRight">
                <div id="centered-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">مشخصات فردی</h4>
                        <p class="mb-2">جهت ارسال کالای شما نیاز به مشخصات شما داریم</p>
                        <div class="row">


                            <div class="col s12">
                                <form class="formValidate" method="post" action="{{url('quotation/score')}}" id="inquery">
                                    @csrf
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="input-field">
                                                <label for="tel">شماره تماس</label>
                                                <input type="text" id="tel" name="tel" value="{{$user['tel'] ?? ''}}" data-error=".errorTxt1">
                                                <small class="errorTxt1"></small>
                                            </div>
                                        </div>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <label for="address">آدرس :</label>
                                                <input id="address" name="address" type="text" class="iransans" value="{{$user['address'] ?? ''}}" data-error=".errorTxt2">
                                                <small class="errorTxt2"></small>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        @if($itemsInCart > 0)
        <div class="row vertical-modern-dashboard col l8 s12">

            <div class="col s12 animate fadeRight">
                <!-- Total Transaction -->
                <div id="centered-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">استعلام جدید</h4>
                        <p class="mb-2">برای ثبت کامل استعلام تمامی مراحل را تا انتها طی نمایید</p>
                        <div class="row">
                            <div class="col s12">
                            </div>

                            <div class="col s12">
                                <table class="centered">
                                    <thead>
                                    <tr>
                                        <th data-field="link">لینک کالا</th>
                                        <th data-field="quantity">تعداد</th>
                                        <th data-field="description">توضیحات</th>
                                        <th data-field="option">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cartRequest as $key => $cartRequests)
                                        <tr>
                                            <td >
                                                <a href="{{$cartRequests['link']}}" target="_blank" class="waves-effect waves-light btn-small s1"><i class="material-icons left">cloud</i>مشاهده لینک</a>
                                            </td>
                                            <td>{{$cartRequests['quantity']}}</td>
                                            <td>{{$cartRequests['description']}}</td>
                                            <td>
                                                <form action="{{url("request/$cartRequests->id/delete")}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class=" btn-flat p-0" type="submit"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col s12 display-flex justify-content-end form-action">
                                <a href="{{url('quotation/emptyCart')}}" class="btn btn-light-pink waves-effect waves-light mb-1 mr-2 iransans">خالی کردن سبد</a>
                                <button type="submit" class="btn indigo waves-effect waves-light mb-1 iransans" form="inquery">
                                    ثبت استعلام
                                </button>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        @else
            <div class="row vertical-modern-dashboard col l8 s12">

                <div class="col s12 animate fadeRight">
                    <!-- Total Transaction -->
                    <div id="centered-table" class="card card card-default scrollspy">
                        <div class="card-content">
                            <div class="row">
                                <!-- Maintenance -->
                                <div id="maintenance" class="col s12 center-align white">
                                    <h5 class="error-code green-text mb-6">سبد کالای شما خالی است</h5>
                                    <h6 class="mb-6 mt-2 grey-text">لینک کالای مورد نظرت رو استعلام کن تا بصورت رایگان براتون پیشفاکتور صادر بشه</h6>
                                    {{--                                    <a class="btn waves-effect waves-light" href="dashboard-ecommerce.html">بازگشت به خانه</a>--}}
                                    <i class="material-icons "><span>touch_app</span></i>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        @endif



@endsection
