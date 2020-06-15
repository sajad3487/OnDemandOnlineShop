@extends('layouts.cDashboardTemplate')

@section('content')

            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>تنظیمات حساب کاربری</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- Account settings -->
                    <section class="tabs-vertical mt-1 section">
                        <div class="row">
                            <div class="col l12 s12">
                                <!-- tabs content -->
                                <div id="general">
                                    <div class="card-panel">
                                        <div class="display-flex">
                                            <div class="media">
                                                <img src="{{asset('images/avatar/avatar-12.png')}}" class="border-radius-4" alt="profile image" height="64" width="64">
                                            </div>
                                            <div class="media-body ml-3">
                                                <small>JPG ، GIF یا PNG مجاز است. حداکثر اندازه 800kB</small>
                                                <div class="upfilewrapper">
                                                    <input id="upfile" type="file"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider mb-1 mt-1"></div>
                                        <form class="formValidate" method="get">
                                            <div class="row">

                                                        <div class="row">
                                                            <div class="input-field col s۶">
                                                                <i class="material-icons prefix ">account_circle</i>
                                                                <input id="icon_prefix pl-3" type="text" class="validate">
                                                                <label for="icon_prefix "> نام کاربر</label>
                                                            </div>
                                                            <div class="input-field col s۶">
                                                                <i class="material-icons prefix">email</i>
                                                                <input id="icon_telephone" type="tel" class="validate">
                                                                <label for="icon_telephone">ایمیل</label>
                                                            </div>
                                                            <div class="input-field col s۶">
                                                                <i class="material-icons prefix">phone</i>
                                                                <input id="icon_telephone" type="tel" class="validate">
                                                                <label for="icon_telephone">تلفن</label>
                                                            </div>
                                                        </div>


                                                <div class="col s12 display-flex justify-content-end form-action">
                                                    <button type="submit" class="btn indigo waves-effect waves-light mr-2 iransans">
                                                        ذخیره تغییرات
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="#messages" class="active">
                                                            <span>پیام ها</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#settings">
                                                            <span>تنظیمات</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#activity">
                                                            <span>فعالیت</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body row pl-3">
                                    <div id="messages" class="col s12 pb-0">
                                        <div class="collection border-none mb-0">
                                            <input class="header-search-input mt-4 mb-2 iransans" type="text" name="Search" placeholder="جستجوی پیام" />
                                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-7.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کیانو</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">ممنون
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">لئو</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-2.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ریچارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">سلام
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-3.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">آدام</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">هی!
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9:00 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-4.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">جان</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">اوه خدا
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:14 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-5.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ادوارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            عاشقتم</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:15 عصر</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-6.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">تامی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">آیا میتونیم؟
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-7.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کریستین</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">عالی!
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9:53 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-8.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">ویلارد</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">
                                                            انجامش بده</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4:20 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-1.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">رونی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">بدست آوردش
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5:20 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-9.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">سلنا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">مرسی
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12:00 صبح</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-10.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">سارا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">باشه
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11:14 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-11.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">بتی</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">می تواند انجام دهد؟</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7:30 شب</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img
                                                            src="../../../app-assets/images/avatar/avatar-12.png"
                                                            alt="avatar" />
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">کمیلیا</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">ولش کن
                                                        </p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2:00 ظهر</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12">
                                        <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">تنظیمات عمومی</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>اعلان</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>فعالیت اخیر را نشان بده</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>فعالیت اخیر را نشان بده</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>نمایش آمار کار</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>ایمیل های خود را نشان دهید</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>اعلان های ایمیل</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">تنظیمات سیستم</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>ورود به سیستم</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>گزارش خطا</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>برنامه های ورود به سیستم </span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>سرورهای پشتیبان</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>گزارش های حسابرسی</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">امروز</div>
                                                    <h6 class="timeline-title">طراحی صفحه اصلی</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content orange-text">مهم</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 دقیقه</div>
                                                    <h6 class="timeline-title">ملیسا فعالیت شما را دوست داشت </h6>
                                                    <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است.</p>
                                                    <div class="timeline-content green-text">حل شد</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">30 دقیقه</div>
                                                    <h6 class="timeline-title">12 کاربر جدید ثبت نام کردند</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">2 ساعت</div>
                                                    <h6 class="timeline-title">تینا در فعالیت شما شرکت می کند</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">5 ساعت</div>
                                                    <h6 class="timeline-title">جاش الان دنبالته</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content red-text">در انتظار</div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">برنامه های ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">همین الان</div>
                                                    <h6 class="timeline-title">سفارش جدید فوری دریافت کرد</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content orange-text">مهم</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">5 دقیقه</div>
                                                    <h6 class="timeline-title">خاموش کردن سیستم</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content blue-text">فوری</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red">
                                                    <div class="timeline-time">20 دقیقه</div>
                                                    <h6 class="timeline-title">بانک اطلاعاتی بارگیری 89٪</h6>
                                                    <p class="timeline-text">در اینجا خبر چند مفهوم تعامل با خوراک آورده شده است</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">ورود به سیستم</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">10 دقیقه</div>
                                                    <h6 class="timeline-title">خطای سیستم</h6>
                                                    <p class="timeline-text">ملیسا فعالیت شما را دوست داشت</p>
                                                    <div class="timeline-content red-text">خطا</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan">
                                                    <div class="timeline-time">1 دقیقه</div>
                                                    <h6 class="timeline-title">سرور تولید پایین</h6>
                                                    <p class="timeline-text">در اینجا چند مفهوم تعامل با خوراک خبر آورده شده است</p>
                                                    <div class="timeline-content blue-text">فوری</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="#!"><i class="material-icons mr-0">chevron_left</i>مدیر</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">سلام!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">چطور میتوانیم کمک کنیم؟ ما برای شما اینجا هستیم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">من به دنبال بهترین الگوی سرپرست هستم؟</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">سرگرمی سرپرست پاسخگو قالب css است</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 صبح</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">اوه بسیار خوب</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">ممنون</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">چگونه می توانم آن را خریداری کنم؟</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 صبح</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">از ThemeForest</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">فقط 24 دلار</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">اوه متشکرم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png"
                                                                                                 alt="avatar" />
      </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">من آن را با اطمینان خریداری می کنم</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">عالی , از تماس با ما احساس راحتی کنید</p>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search" />
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                        <ul>
                            <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                            <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                            <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                            <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>


    @endsection
