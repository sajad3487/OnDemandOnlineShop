@extends('layouts.adminPanelTemplate')
@section('content')

    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">


                        <!--Preselecting a tab-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="preselecting" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">انتخاب برگه</h4>
                                                    <p>
                                                        وقتی روی هر برگه کلیک می کنید ، فقط ظرف دارای شناسه مربوطه قابل
                                                        مشاهده خواهد بود </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row" id="main-view-tab">
                                                    <div class="col s12">
                                                        <ul class="tabs tab-demo-active z-depth-1 cyan">
                                                            @if($item->status >= 1)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 1) active @endif"
                                                                       href="#paid">مشخصات کالا</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 2)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 2) active @endif "
                                                                       href="#purchased">خرید</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 3)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 3) active @endif"
                                                                       href="#arrived">دفتر خارجی</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 4)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 4) active @endif"
                                                                       href="#shipped">ارسال به ایران</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 5)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 5) active @endif"
                                                                       href="#received">دفتر تهران</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 6)

                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 6) active @endif"
                                                                       href="#delivered">ارسال به مشتری</a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="col s12 ">
                                                        @if($item->status >= 1)
                                                            <div id="paid" class="col s12  cyan lighten-4">

                                                                <div class="row mt-2">
                                                                    <form class="col s12">
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input id="purchased_date" type="date" class="validate" name="purchased_date">
                                                                                <label for="purchased_date">تاریخ خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix mr-4">person_add</i>
                                                                                <input id="buyer" type="text" class="validate" name="buyer">
                                                                                <label for="buyer">خریدار</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">code</i>
                                                                                <input id="purchased_code" type="text" class="validate" name="purchased_number">
                                                                                <label for="purchased_code">کد خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix ">attach_money</i>
                                                                                <input id="purchased_price" type="number" class="validate" name="purchased_price">
                                                                                <label for="purchased_price" >قیمت خرید</label>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        @endif
                                                        @if($item->status >= 2)
                                                            <div id="purchased" class="col s12  cyan lighten-4">

                                                                <div class="row mt-2">
                                                                    <form class="col s12">
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">account_circle</i>
                                                                                <input id="icon_prefix" type="date" class="validate" name="purchased_date">
                                                                                <label for="icon_prefix">تاریخ خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">phone</i>
                                                                                <input id="icon_telephone" type="text" class="validate" name="buyer">
                                                                                <label for="icon_telephone">خریدار</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">account_circle</i>
                                                                                <input id="icon_prefix" type="text" class="validate" name="purchased_number">
                                                                                <label for="icon_prefix">کد خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <i class="material-icons prefix">phone</i>
                                                                                <input id="icon_telephone" type="number" class="validate" name="purchased_price">
                                                                                <label for="icon_telephone">قیمت خرید</label>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        @endif
                                                        @if($item->status >= 3)
                                                            <div id="arrived" class="col s12  cyan lighten-4">
                                                                <p class="mt-2 mb-2">
                                                                    ماکارونی شیرین براونی مارشملو , کیک هویج , کیک هویج
                                                                    نوعی
                                                                    , شیرینی شکلاتی دانه دانه , کروسانت توت , دسر چوپان
                                                                    ,
                                                                    کروسان کروسانت تون </p>
                                                            </div>
                                                        @endif
                                                        @if($item->status >= 4)
                                                            <div id="shipped" class="col s12  cyan lighten-4">
                                                                <p class="mt-2 mb-2">
                                                                    ماکارونی شیرین براونی مارشملو , کیک هویج , کیک هویج
                                                                    نوعی
                                                                    , شیرینی شکلاتی دانه دانه , کروسانت توت , دسر چوپان
                                                                    ,
                                                                    کروسان کروسانت تون </p>
                                                            </div>
                                                        @endif
                                                        @if($item->status >= 5)
                                                            <div id="received" class="col s12  cyan lighten-4">
                                                                <p class="mt-2 mb-2">
                                                                    ماکارونی شیرین براونی مارشملو , کیک هویج , کیک هویج
                                                                    نوعی
                                                                    , شیرینی شکلاتی دانه دانه , کروسانت توت , دسر چوپان
                                                                    ,
                                                                    کروسان کروسانت تون </p>
                                                            </div>
                                                        @endif
                                                        @if($item->status >= 6)
                                                            <div id="delivered" class="col s12  cyan lighten-4">
                                                                <p class="mt-2 mb-2">
                                                                    ماکارونی شیرین براونی مارشملو , کیک هویج , کیک هویج
                                                                    نوعی
                                                                    , شیرینی شکلاتی دانه دانه , کروسانت توت , دسر چوپان
                                                                    ,
                                                                    کروسان کروسانت تون </p>
                                                            </div>
                                                        @endif
                                                    </div>
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
