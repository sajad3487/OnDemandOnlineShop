@extends('layouts.adminPanelTemplate')
@section('content')
    <link rel="stylesheet" type="text/css"
          href="{{asset('css-rtl/themes/vertical-gradient-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('css-rtl/themes/vertical-gradient-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/pages/form-wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/materialize-stepper/materialize-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css-rtl/custom/custom.css')}}">

    <div id="main">
        <div class="row">
            @include('fragment.errors')
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>اضافه نمودن کالای جدید</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index-2.html">خانه</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('admin/shop/index')}}">کالاها</a>
                                </li>
                                <li class="breadcrumb-item active">اضافه کردن کالای جدید
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
                                <p class="caption mb-0">لطفا برای ثبت کالای جدید تمامی مراحل را یک به یک تکمیل نموده و
                                    در نهایت ثبت نهایی را انجام دهید</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-header">
                                            <h4 class="card-title">مشخصات کالا</h4>
                                        </div>
                                        <form action="
                                            @if(isset($product))
                                        {{url("admin/shop/$product->id/update")}}" method="post">
                                            @else
                                                {{url('admin/shop/store')}}" method="post">
                                            @endif
                                            @csrf
                                            <ul class="stepper linear" id="linearStepper">
                                                <li class="step active">
                                                    <div class="step-title waves-effect">عناوین</div>
                                                    <div class="step-content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label for="title">عنوان کالا : <span
                                                                        class="red-text">*</span></label>
                                                                <input type="text" id="title" name="title"
                                                                       class="validate" required
                                                                       value="{{old('title') ?? $product['title'] ?? ''}} ">
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <label for="subtitle">زیرعنوان : <span class="red-text">*</span></label>
                                                                <input type="text" id="subtitle" class="validate"
                                                                       name="subtitle" required
                                                                       value="{{old('subtitle') ?? $product['subtitle'] ?? ''}} ">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="brand">برند : </label>
                                                                <input type="text" class="validate" name="brand"
                                                                       id="brand"
                                                                       value="{{old('brand') ?? $product['brand'] ?? ''}} ">
                                                            </div>
                                                        </div>
                                                        <div class="step-actions">
                                                            <div class="row">
                                                                <div class="col m4 s12 mb-3">
                                                                    <button class="red btn btn-reset iransans"
                                                                            type="reset">
                                                                        <i class="material-icons left">clear</i>پاک کردن
                                                                        فرم
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button class="btn btn-light previous-step iransans"
                                                                            disabled>
                                                                        <i class="material-icons left">arrow_forward</i>
                                                                        مرحله قبل
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button
                                                                        class="waves-effect waves dark btn btn-primary next-step iransans"
                                                                        type="submit">
                                                                        مرحله بعد
                                                                        <i class="material-icons right">arrow_back</i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="step">
                                                    <div class="step-title waves-effect">مشخصات</div>
                                                    <div class="step-content">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="description" class="materialize-textarea"
                                                                          rows="4"
                                                                          name="description">{{old('description') ?? $product['description'] ?? ''}}</textarea>
                                                                <label for="description">توصیحات :</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <textarea id="spec" class="materialize-textarea"
                                                                          rows="4"
                                                                          name="spec">{{old('spec') ?? $product['spec'] ?? ''}}</textarea>
                                                                <label for="spec">مشخصات فنی :</label>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <select required>
                                                                    <option value="Select" disabled selected>دسته بندی
                                                                        :
                                                                    </option>
                                                                    <option value="Planning">دیجیتال</option>
                                                                    <option value="In Progress">در حال پیش رفت</option>
                                                                    <option value="Completed">تکمیل شد</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <select name="category"
                                                                        value="{{old('category') ?? $product['category'] ?? ''}} ">
                                                                    <option value="Select" disabled selected>زیر شاخه
                                                                        :
                                                                    </option>
                                                                    <option value="New York">نیویورک</option>
                                                                    <option value="Queens">وزیر</option>
                                                                    <option value="Washington">واشنگتن</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <label for="tags">تگ ها (با ویرگول از هم جدا
                                                                    کنید):</label>
                                                                <input type="text" class="validate" id="tags"
                                                                       name="tags"
                                                                       value="{{old('tags') ?? $product['tags'] ?? ''}} ">
                                                            </div>
                                                        </div>
                                                        <div class="step-actions">
                                                            <div class="row">
                                                                <div class="col m4 s12 mb-3">
                                                                    <button class="red btn btn-reset iransans"
                                                                            type="reset">
                                                                        <i class="material-icons left">clear</i>پاک کردن
                                                                        فرم
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button
                                                                        class="btn btn-light previous-step iransans">
                                                                        <i class="material-icons left">arrow_forward</i>
                                                                        مرحله قبل
                                                                    </button>
                                                                </div>
                                                                <div class="col m4 s12 mb-3">
                                                                    <button
                                                                        class="waves-effect waves dark btn btn-primary next-step iransans"
                                                                        type="submit">
                                                                        مرحله بعد
                                                                        <i class="material-icons right">arrow_back</i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="step">
                                                    <div class="step-title waves-effect">مالی و انبار</div>
                                                    <div class="step-content">
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="price">قیمت : <span
                                                                        class="red-text">*</span></label>
                                                                <input type="number" class="validate" id="price"
                                                                       name="price" required
                                                                       value="{{old('price') ?? $product['price'] ?? ''}}">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <label for="discount">تخفیف : </label>
                                                                <input type="number" class="validate" id="discount"
                                                                       name="discount"
                                                                       value="{{old('discount') ?? $product['discount'] ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="delivery_time">مدت تحویل : <span
                                                                        class="red-text">*</span></label>
                                                                <input type="number" class="validate" id="delivery_time"
                                                                       name="delivery_time" required
                                                                       value="{{old('delivery_time') ?? $product['delivery_time'] ?? ''}}">
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <select name="status">
                                                                    <option disabled>وضعیت :</option>
                                                                    <option value="1"
                                                                            @if(isset($product) && $product['status'] == 1) selected @endif>
                                                                        پیش نویس
                                                                    </option>
                                                                    <option value="2"
                                                                            @if(isset($product) && $product['status'] == 2) selected @endif>
                                                                        فعال
                                                                    </option>
                                                                    <option value="3"
                                                                            @if(isset($product) && $product['status'] == 3) selected @endif>
                                                                        غیرفعال
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col m6 s12">
                                                                <label for="stock">موجودی انبار : <span
                                                                        class="red-text">*</span></label>
                                                                <input type="number" class="validate" id="stock"
                                                                       name="stock" required
                                                                       value="{{old('stock') ?? $product['stock'] ?? ''}}">
                                                            </div>
                                                        </div>
                                                        <div class="step-actions">
                                                            <div class="row">
                                                                <div class="col m6 s12 mb-1">
                                                                    <button class="red btn mr-1 btn-reset iransans"
                                                                            type="reset">
                                                                        <i class="material-icons">clear</i>
                                                                        تنظیم مجدد
                                                                    </button>
                                                                </div>
                                                                <div class="col m6 s12 mb-1">
                                                                    <button
                                                                        class="waves-effect waves-dark btn btn-primary iransans"
                                                                        type="submit">ارسال
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <h5>انتخاب رنگ های موجود</h5>

                                <form action="{{url('/admin/shop/addColor')}}" class="row" method="post">
                                    @csrf
                                    <input type="number" name="product_id" value="{{$product->id??''}}"
                                           class="display-none">
                                    <!-- Switch -->
                                    @isset($colors)
                                        <div class="switch mt-4">

                                            @foreach($colors as $key=>$color)
                                                <label class="col s3 valign-wrapper">
                                                    <input type="checkbox"
                                                           @foreach($product->color as $selectedColor)
                                                               @if($selectedColor->id == $color->id)
                                                                    checked="checked"
                                                               @endif
                                                           @endforeach
                                                           name="colorId[]" value="{{$color->id}}">
                                                    <span class="lever"></span>
                                                    {{$color->name}}
                                                    <div
                                                        style="height: 20px;width: 20px;background-color: {{"#".$color->code}}; display: inline-block;"
                                                        class="ml-3"></div>
                                                </label>
                                            @endforeach
                                        </div>

                                        <div class="input-field col s12">
                                            <button
                                                class="btn waves-effect waves-light gradient-45deg-green-teal right iransans"
                                                type="submit" @if(!isset($product))disabled @endif>ارسال
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    @endisset
                                </form>

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
