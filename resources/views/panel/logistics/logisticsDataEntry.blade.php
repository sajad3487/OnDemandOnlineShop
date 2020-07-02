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
                                                            @if($item->status >= 1 || $editAll ==1)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 1) active @endif"
                                                                       href="#paid">مشخصات کالا</a>
                                                                </li>

                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light "
                                                                       href="#purchased">خرید</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 2 || $editAll ==1)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 2) active @endif"
                                                                       href="#arrived">دفتر خارجی</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 3 || $editAll ==1)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 3) active @endif"
                                                                       href="#shipped">ارسال به ایران</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 4 || $editAll ==1)
                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 4) active @endif"
                                                                       href="#received">دفتر تهران</a>
                                                                </li>
                                                            @endif
                                                            @if($item->status >= 5 || $editAll ==1)

                                                                <li class="tab col m2">
                                                                    <a class="white-text waves-effect waves-light @if($item->status == 6 || $item->status== 5) active @endif"
                                                                       href="#delivered">ارسال به مشتری</a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="col s12 ">
                                                        @if($item->status >= 1 || $editAll ==1)
                                                            <div id="paid" class="col s12 white lighten-4">

                                                                <div class="row">
                                                                    <div class="col s12 mt-2 mb-2">
                                                                        لینک کالا : <a href="{{$item->request->link}}"
                                                                                       target="_blank">{{$item->request->link}}</a>
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2">
                                                                        شماره فاکتور : {{$item->quotation_id}}
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2">
                                                                        نام مشتری : {{$item->quotation->user->name}}
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2 red-text bold">
                                                                        تعداد : {{$item->request->quantity}}
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2">
                                                                        توضیحات : {{$item->request->description}}
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2 bold">
                                                                        واحد ارزی : {{$item->request->currency_id}}
                                                                    </div>
                                                                    <div class="col s12 m6 mt-2 mb-2">
                                                                        تاریخ پیشفاکتور
                                                                        : {{$item->quotation->created_at}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div id="purchased"
                                                                 class="col s12  @if($item->status ==1 || $editAll ==1)cyan @else white @endif lighten-4">
                                                                <div class="row mt-2">
                                                                    <form class="col s12"
                                                                          action="{{url("admin/purchasedItem/$item->id/update/$item->status")}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="input-field col s12">
                                                                                <i class="material-icons prefix">card_travel</i>
                                                                                <input required id="name" type="text"
                                                                                       class="validate"
                                                                                       value="{{old('name') ?? $item->name }}"
                                                                                       name="name">
                                                                                <label for="name"
                                                                                       class="pl-2">نام کالا</label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input required id="purchased_date" type="date"
                                                                                       class="validate"
                                                                                       value="{{old('purchased_date') ?? $item->purchased_date  }}"
                                                                                       name="purchased_date">
                                                                                <label for="purchased_date"
                                                                                       class="pl-2">تاریخ خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix mr-4">person_add</i>
                                                                                <input required id="buyer" type="text"
                                                                                       class="validate"
                                                                                       value="{{old('buyer') ?? $item->buyer  }}" name="buyer">
                                                                                <label for="buyer"
                                                                                       class="pl-2">خریدار</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">code</i>
                                                                                <input required id="purchased_number" type="text"
                                                                                       class="validate"
                                                                                       value="{{old('purchased_number') ?? $item->purchased_number  }}"
                                                                                       name="purchased_number">
                                                                                <label for="purchased_number"
                                                                                       class="pl-2">کد خرید</label>
                                                                            </div>
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix ">attach_money</i>
                                                                                <input required id="purchased_price"
                                                                                       type="number" class="validate"
                                                                                       value="{{old('purchased_price') ?? $item->purchased_price  }}"
                                                                                       name="purchased_price">
                                                                                <label for="purchased_price"
                                                                                       class="pl-2">قیمت خرید</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-2">
                                                                            @if($item->status ==1 || $editAll ==1)
                                                                                <div
                                                                                    class="col s12 display-flex justify-content-end mt-3 ">
                                                                                    <a type="button"
                                                                                       class="btn btn-light iransans mr-2">بازگشت</a>
                                                                                    <button type="submit"
                                                                                            class="btn indigo iransans">
                                                                                        ذخیره تغییرات
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if($item->status >= 2 || $editAll ==1)
                                                            <div id="arrived"
                                                                 class="col s12  @if($item->status ==2|| $editAll ==1)cyan @else white @endif lighten-4">
                                                                <div class="row mt-2">
                                                                    <form class="col s12"
                                                                          action="{{url("admin/purchasedItem/$item->id/update/$item->status")}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input required id="received_date" type="date"
                                                                                       class="validate"
                                                                                       value="{{old('received_date') ?? $item->received_date  }}"
                                                                                       name="received_date">
                                                                                <label for="received_date"
                                                                                       class="pl-2">تاریخ رسیدن به دفتر
                                                                                    خارجی</label>
                                                                            </div>
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix mr-4">person_add</i>
                                                                                <input required id="co_worker" type="text"
                                                                                       class="validate"
                                                                                       value="{{old('co_worker') ?? $item->co_worker  }}"
                                                                                       name="co_worker">
                                                                                <label for="co_worker"
                                                                                       class="pl-2">همکار خارجی</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-2">
                                                                            @if($item->status ==2 || $editAll ==1)
                                                                                <div
                                                                                    class="col s12 display-flex justify-content-end mt-3 ">
                                                                                    <a type="button"
                                                                                       class="btn btn-light iransans mr-2">بازگشت</a>
                                                                                    <button type="submit"
                                                                                            class="btn indigo iransans">
                                                                                        ذخیره تغییرات
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        @endif
                                                        @if($item->status >= 3 || $editAll ==1)
                                                            <div id="shipped"
                                                                 class="col s12  @if($item->status ==3|| $editAll ==1)cyan @else white @endif lighten-4">
                                                                <div class="row mt-2">
                                                                    <form class="col s12"
                                                                          action="{{url("admin/purchasedItem/$item->id/update/$item->status")}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input required id="sending_date" type="date"
                                                                                       class="validate"
                                                                                       value="{{old('sending_date') ?? $item->sending_date  }}"
                                                                                       name="sending_date">
                                                                                <label for="sending_date"
                                                                                       class="pl-2">تاریخ حمل به
                                                                                    ایران</label>
                                                                            </div>
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix mr-4">person_add</i>
                                                                                <input required id="passenger" type="text"
                                                                                       class="validate"
                                                                                       value="{{old('passenger') ?? $item->passenger  }}"
                                                                                       name="passenger">
                                                                                <label for="passenger"
                                                                                       class="pl-2">مسافر</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-2">
                                                                            @if($item->status ==3 || $editAll ==1)
                                                                                <div
                                                                                    class="col s12 display-flex justify-content-end mt-3 ">
                                                                                    <a type="button"
                                                                                       class="btn btn-light iransans mr-2">بازگشت</a>
                                                                                    <button type="submit"
                                                                                            class="btn indigo iransans">
                                                                                        ذخیره تغییرات
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        @endif
                                                        @if($item->status >= 4 || $editAll ==1)
                                                            <div id="received"
                                                                 class="col s12  @if($item->status ==4|| $editAll ==1)cyan @else white @endif lighten-4">
                                                                <div class="row mt-2">
                                                                    <form class="col s12"
                                                                          action="{{url("admin/purchasedItem/$item->id/update/$item->status")}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input required id="arrival_date" type="date"
                                                                                       class="validate"
                                                                                       value="{{old('arrival_date') ?? $item->arrival_date  }}"
                                                                                       name="arrival_date">
                                                                                <label for="arrival_date"
                                                                                       class="pl-2">تاریخ رسیدن به
                                                                                    ایران</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-2">
                                                                            @if($item->status ==4 || $editAll ==1)
                                                                                <div
                                                                                    class="col s12 display-flex justify-content-end mt-3 ">
                                                                                    <a type="button"
                                                                                       class="btn btn-light iransans mr-2">بازگشت</a>
                                                                                    <button type="submit"
                                                                                            class="btn indigo iransans">
                                                                                        ذخیره تغییرات
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        @endif
                                                        @if($item->status >= 5 || $editAll ==1)
                                                            <div id="delivered"
                                                                 class="col s12  @if($item->status ==5 || $editAll ==1)cyan @else white @endif lighten-4">
                                                                <div class="row mt-2">
                                                                    <form class="col s12"
                                                                          action="{{url("admin/purchasedItem/$item->id/update/$item->status")}}"
                                                                          method="post">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="input-field col s12 m6">
                                                                                <i class="material-icons prefix">date_range</i>
                                                                                <input required id="delivered_date" type="date"
                                                                                       class="validate"
                                                                                       value="{{old('delivered_date') ?? $item->delivered_date  }}"
                                                                                       name="delivered_date">
                                                                                <label for="delivered_date"
                                                                                       class="pl-2">تاریخ رسیدن به
                                                                                    ایران</label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mb-2">
                                                                            @if($item->status >=5  || $editAll ==1)
                                                                                <div
                                                                                    class="col s12 display-flex justify-content-end mt-3 ">
                                                                                    <a type="button"
                                                                                       class="btn btn-light iransans mr-2">بازگشت</a>
                                                                                    <button type="submit"
                                                                                            class="btn indigo iransans">
                                                                                        ذخیره تغییرات
                                                                                    </button>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </form>
                                                                </div>
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
