@extends('layouts.adminPanelTemplate')
@section('content')
    <div id="main">

        <div class="row">
            <div class="pt-1 pb-0" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title"><span>گزارش گیری</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="{{url('panel')}}">خانه</a>
                                </li>
                                <li class="breadcrumb-item active">گزارش گیری
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card cyan darken-4">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">گزارش پیشفاکتورها</span>
                        <div class="border-non mt-5">
                            <form action="{{url('/admin/quotation/report/unpaidQuotation')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="first_date" placeholder="از" type="date" name="first_date">
                                        <label class="contact-input" for="first_date">از</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="second_date" placeholder="تا" type="date" name="second_date">
                                        <label class="contact-input" for="second_date">تا</label>
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card cyan darken-1">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">گزارش فاکتورها</span>
                        <div class="border-non mt-5">
                            <form action="{{url('/admin/quotation/report/paidQuotation')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="first_date" placeholder="از" type="date" name="first_date">
                                        <label class="contact-input black-text" for="first_date">از</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="second_date" placeholder="تا" type="date" name="second_date">
                                        <label class="contact-input black-text" for="second_date">تا</label>
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card cyan darken-3">
                    <div class="card-content white-text">
                        <span class="card-title font-weight-400 mb-10">گزارش پرداخت ها</span>
                        <div class="border-non mt-5">
                            <form action="{{url('/admin/quotation/report/payment')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="first_date" placeholder="از" type="date" name="first_date">
                                        <label class="contact-input" for="first_date">از</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="second_date" placeholder="تا" type="date" name="second_date">
                                        <label class="contact-input" for="second_date">تا</label>
                                    </div>
                                </div>
                                <button type="submit" class="waves-effect waves-light btn red border-round box-shadow">مشاهده</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="divider"></div>--}}



    </div>
@endsection
