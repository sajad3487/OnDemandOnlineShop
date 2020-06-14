<ul class="timeline">

    @if($request->purchased_item['status'] >= 1)
        <li>
            <div class="timeline-badge cyan">
                <a><i class="material-icons white-text">add_box</i></a>
            </div>
            <div class="timeline-panel mb-4">
                <div class="card hoverable m-0 ">
                    <div class="card-content">
                        <div class="card-header">
                            <h3 class="mr-1 cyan-text"></h3>
                            <div>
                                <h6 class="m-0 cyan-text">1 . خریداری شده</h6>
                                <small></small>
                            </div>
                        </div>
                        <div class="divider mt-2 mb-2"></div>
                        <ul class="horizontal-avatar hide-on-small-only mb-0">
                            فاکتور توسط شما پرداخت شده است و خریدتان از فروشنده انجام شده است
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    @else
        <li>
            <div class="timeline-badge grey">
                <a><i class="material-icons white-text">add_box</i></a>
            </div>
            <div class="timeline-panel mb-4">
                <div class="card m-0 ">
                    <div class="card-content">
                        <div class="card-header">
                            <h3 class="mr-1 grey-text"></h3>
                            <div class="mt-3 mb-3">
                                <h6 class="m-0 grey-text">1 . خریداری شده</h6>
                                <small></small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </li>
    @endif
    @if($request->purchased_item['status'] >= 2)
            <li class="timeline-inverted">
                <div class="timeline-badge blue">
                    <a><i class="material-icons white-text">local_shipping</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 blue-text"></h3>
                                <div>
                                    <h6 class="m-0 blue-text">2. ارسال فروشنده</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                فروشنده کالایتان را ارسال کرده ولی هنوز به دست همکار ما در کشور مبدا نرسیده
                                است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li class="timeline-inverted">
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">local_shipping</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div class="mt-3 mb-3">
                                    <h6 class="m-0 grey-text">2. ارسال فروشنده</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
    @endif
    @if($request->purchased_item['status'] >= 3)
            <li>
                <div class="timeline-badge green">
                    <a><i class="material-icons white-text">storage</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 green-text"></h3>
                                <div>
                                    <h6 class="m-0 green-text">3 . تحویل دفتر ایتالیا</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                کالای شما بدست همکار ما در ایتالیا رسیده است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li>
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">storage</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div class="mb-3 mt-3">
                                    <h6 class="m-0 grey-text">3 . تحویل دفتر ایتالیا</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>


    @endif
    @if($request->purchased_item['status'] >= 4)
            <li class="timeline-inverted">
                <div class="timeline-badge yellow">
                    <a><i class="material-icons white-text">flight_takeoff</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 yellow-text"></h3>
                                <div>
                                    <h6 class="m-0 yellow-text">4. ارسال به ایران</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                فروشنده کالایتان را ارسال کرده ولی هنوز به دست همکار ما در کشور مبدا نرسیده
                                است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li class="timeline-inverted">
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">flight_takeoff</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div class="mt-3 mb-3">
                                    <h6 class="m-0 grey-text">4. ارسال به ایران</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>


    @endif
    @if($request->purchased_item['status'] >= 5)
            <li>
                <div class="timeline-badge red">
                    <a><i class="material-icons white-text">chrome_reader_mode</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 red-text"></h3>
                                <div>
                                    <h6 class="m-0 red-text">5 . تحویل گمرک</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                کالای شما بدست همکار ما در ایتالیا رسیده است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li>
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">chrome_reader_mode</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card  m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div class="mb-3 mt-3">
                                    <h6 class="m-0 grey-text">5 . تحویل گمرک</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

    @endif
    @if($request->purchased_item['status'] >= 6)
            <li class="">
                <div class="timeline-badge orange">
                    <a><i class="material-icons white-text">store</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 orange-text"></h3>
                                <div>
                                    <h6 class="m-0 orange-text">6. تحویل دفتر ایران</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                فروشنده کالایتان را ارسال کرده ولی هنوز به دست همکار ما در کشور مبدا نرسیده
                                است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li class="">
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">store</i></a>
                </div>
                <div class="timeline-panel">
                    <div class="card  m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div class="mt-3 mb-3">
                                    <h6 class="m-0 grey-text">6. تحویل دفتر ایران</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

    @endif
    @if($request->purchased_item['status'] >= 7)
            <li class="timeline-inverted">
                <div class="timeline-badge brown">
                    <a><i class="material-icons white-text">local_shipping</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card hoverable m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 brown-text"></h3>
                                <div>
                                    <h6 class="m-0 brown-text">7 . ارسال به مشتری</h6>
                                    <small></small>
                                </div>
                            </div>
                            <div class="divider mt-2 mb-2"></div>
                            <ul class="horizontal-avatar hide-on-small-only mb-0">
                                کالای شما بدست همکار ما در ایتالیا رسیده است
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
    @else
            <li class="timeline-inverted">
                <div class="timeline-badge grey">
                    <a><i class="material-icons white-text">local_shipping</i></a>
                </div>
                <div class="timeline-panel mb-4">
                    <div class="card m-0 ">
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="mr-1 grey-text"></h3>
                                <div>
                                    <h6 class="m-0 grey-text">7 . ارسال به مشتری</h6>
                                    <small></small>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
    @endif










    <li class="clearfix" style="float: none;"></li>
</ul>
<link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/page-timeline.min.css')}}">
