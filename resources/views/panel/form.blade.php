@extends('layouts.app')

@section('content')

    <div class="container text-right">

        <form action="{{url('/storeNewOrder')}}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">لینک کالا</label>
                    <input type="text" name="link" class="form-control" id="inputEmail4" placeholder="لینک کالای خودرا وارد نمایید">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">تعداد</label>
                    <input type="number" name="quantity" class="form-control" id="inputPassword4" placeholder="تعداد">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">توصیحات</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="درصورت وجود توضیحات درباره کالای خود اینجا بنویسید" rows="3"></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label mr-4" for="gridCheck">
                        شرایط و قوانین سایت را مطالعه نمودم و قبول دارم
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ثبت کالا</button>
        </form>
    </div>

@endsection
