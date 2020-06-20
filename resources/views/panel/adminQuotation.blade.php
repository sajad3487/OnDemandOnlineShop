@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>پیشفاکتورهای صادر نشده</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">جدول</a>
                                </li>
                                <li class="breadcrumb-item active">جدول داده
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
                                <p class="caption mb-0">جداول روش خوبی برای سازماندهی داده های زیادی است. ما چند کلاس ابزار را برای کمک به شما در سبک کردن جدول خود در اسرع وقت فراهم می کنیم. علاوه بر این ، برای بهبود تجربه تلفن همراه ، تمام جداول در عرض صفحه نمایش تلفن همراه
                                    به طور خودکار متمرکز می شوند.
                                </p>
                            </div>
                        </div>
                        <!-- DataTables example -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="button-trigger" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">به عنوان مثال جداول داده</h4>
                                        <div class="row">

                                            <div class="col s12">
                                                <table id="data-table-simple" class="display">
                                                    <thead>
                                                    <tr>
                                                        <th>شماره پیشفاکتور</th>
                                                        <th>نام مشتری</th>
                                                        <th>ایمیل</th>
                                                        <th>موبایل</th>
                                                        <th>تاریخ</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($unpriceQuotation as $quotation)
                                                    <tr>
                                                        <td>{{$quotation->id}}</td>
                                                        <td>{{$quotation->user->name}}</td>
                                                        <td>{{$quotation->user->email}}</td>
                                                        <td>{{$quotation->user->tel}}</td>
                                                        <td>{{$quotation->created_at}}</td>
                                                        <td><a href="{{url("/admin/quotation/$quotation->id/view")}}" class="btn">صدور</a></td>
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
                    <!-- START RIGHT SIDEBAR NAV -->


                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>

    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('js/scripts/data-tables.min.js')}}"></script>
    <script src="{{asset('js/vendors.min.js')}}"></script>

@endsection
