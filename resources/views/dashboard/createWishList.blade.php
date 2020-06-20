@extends('layouts.cDashboardTemplate')
@section('content')
    <div class="col s12 m12 l12">
        <div id="basic-form" class="card card card-default scrollspy">
            <div class="card-content">
                <h4 class="card-title">فرم پایه</h4>
                <form action="{{url('wishList/store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="link" type="text" id="fn">
                            <label class="contact-input" for="fn">لینک</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="description" id="description" type="text">
                            <label class="contact-input" for="description">توضیحات</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit">ثبت
                                    لینک
                                    <i class="material-icons right">add</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
