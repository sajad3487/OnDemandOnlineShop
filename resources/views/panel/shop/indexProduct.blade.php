@extends('layouts.adminPanelTemplate')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/form-wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/materialize-stepper/materialize-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">

    <div id="main">
        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>فرم جادوگر</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">فرم</a>
                                </li>
                                <li class="breadcrumb-item active">جادوگر فرم
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-form-wizard">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">ما استفاده می کنیم <a href="">پله ساز</a> به عنوان یک جادوگر فرم پله ساز بخشی اساسی از دستورالعمل های طراحی مواد است. این فرم ها را ساده تر و بسیاری موارد دیگر می کند.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h4 class="card-title">پله خطی</h4>
                                        </div>

                                        <ul class="stepper linear" id="linearStepper">
                                            <li class="step active">
                                                <div class="step-title waves-effect">قدم 1</div>
                                                <div class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="firstName">نام : <span class="red-text">*</span></label>
                                                            <input type="text" id="firstName" name="firstName" class="validate" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="lastName">نام خانوادگی : <span class="red-text">*</span></label>
                                                            <input type="text" id="lastName" class="validate" name="lastName" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="Email1">ایمیل : <span class="red-text">*</span></label>
                                                            <input type="email" class="validate" name="Email" id="Email1" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="contactNum1">شماره تماس : <span class="red-text">*</span></label>
                                                            <input type="number" class="validate" name="contactNum" id="contactNum1" required>
                                                        </div>
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="red btn btn-reset iransans" type="reset">
                                                                    <i class="material-icons left">clear</i>تنظیم مجدد
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="btn btn-light previous-step iransans" disabled>
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    قبل
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="waves-effect waves dark btn btn-primary next-step iransans" type="submit">
                                                                    بعد
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">قدم 2</div>
                                                <div class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="proposal">عنوان پیشنهادی : <span class="red-text">*</span></label>
                                                            <input type="text" class="validate" id="proposal" name="proposal" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="job">عنوان شغل : <span class="red-text">*</span></label>
                                                            <input type="text" class="validate" id="job" name="job" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="company">شرکت قبلی :</label>
                                                            <input type="text" class="validate" id="company" name="company">
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="url">آدرس اینترنتی :</label>
                                                            <input type="url" class="validate" id="url">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="exp">تجربه : <span class="red-text">*</span></label>
                                                            <input type="text" class="validate" id="exp" name="exp">
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <label for="desc">توضیح کوتاه : <span class="red-text">*</span></label>
                                                            <textarea name="dec" id="desc" rows="4" class="materialize-textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="red btn btn-reset iransans" type="reset">
                                                                    <i class="material-icons left">clear</i>تنظیم مجدد
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="btn btn-light previous-step iransans">
                                                                    <i class="material-icons left">arrow_back</i>
                                                                    قبل
                                                                </button>
                                                            </div>
                                                            <div class="col m4 s12 mb-3">
                                                                <button class="waves-effect waves dark btn btn-primary next-step iransans" type="submit">
                                                                    بعد
                                                                    <i class="material-icons right">arrow_forward</i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="step">
                                                <div class="step-title waves-effect">قدم 3</div>
                                                <div class="step-content">
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="eventName">نام رویداد، مناسبت : <span class="red-text">*</span></label>
                                                            <input type="text" class="validate" id="eventName" name="eventName" required>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <select>
                                                                <option value="Select" disabled selected>نوع رویداد را انتخاب کنید </option>
                                                                <option value="Wedding">عروسی</option>
                                                                <option value="Party">جشن</option>
                                                                <option value="FundRaiser">کمک مالی</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <select>
                                                                <option value="Select" disabled selected>وضعیت رویداد را انتخاب کنید</option>
                                                                <option value="Planning">برنامه ریزی</option>
                                                                <option value="In Progress">در حال پیش رفت</option>
                                                                <option value="Completed">تکمیل شد</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <select>
                                                                <option value="Select" disabled selected>محل رویداد</option>
                                                                <option value="New York">نیویورک</option>
                                                                <option value="Queens">وزیر</option>
                                                                <option value="Washington">واشنگتن</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col m6 s12">
                                                            <label for="Budget">بودجه رویداد : <span class="red-text">*</span></label>
                                                            <input type="Number" class="validate" id="Budget" name="Budget">
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <p> <label>الزامات</label></p>
                                                            <p> <label>
                                                                    <input type="checkbox">
                                                                    <span>کارمندان</span>
                                                                </label></p>
                                                            <p><label>
                                                                    <input type="checkbox">
                                                                    <span>تهیه کردن</span>
                                                                </label></p>
                                                        </div>
                                                    </div>
                                                    <div class="step-actions">
                                                        <div class="row">
                                                            <div class="col m6 s12 mb-1">
                                                                <button class="red btn mr-1 btn-reset iransans" type="reset">
                                                                    <i class="material-icons">clear</i>
                                                                    تنظیم مجدد
                                                                </button>
                                                            </div>
                                                            <div class="col m6 s12 mb-1">
                                                                <button class="waves-effect waves-dark btn btn-primary iransans" type="submit">ارسال</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
    <script src="{{asset('vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>

    <script src="{{asset('js/scripts/form-wizard.min.js')}}"></script>

@endsection
