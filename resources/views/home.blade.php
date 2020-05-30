@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">داشبورد</div>

                <div class="card-body text-right">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('newOrder')}}" class="btn btn-primary">ثبت سفارش جدید</a>
                    <a href="#" class="btn btn-success">پیشفاکتورها</a>
                    <a href="#" class="btn btn-warning">پیگیری سفارشات</a>
                    <a href="#" class="btn btn-danger">پشتیبانی</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
