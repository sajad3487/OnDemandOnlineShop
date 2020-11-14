@extends('layouts.cDashboardTemplate')
@section('content')


    <div class="row">
        <div class="col s12 m6 l4">
            <a href="{{url('quotation/create')}}">
                <div class="card padding-4 animate fadeLeft">
                    <div class="row">
                        <div class="col s5 m5">
                            <p class="mb-0">استعلام جدید</p>
                        </div>
                        <div class="col s7 m7 right-align">
                            <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">add_shopping_cart</i>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('wishList/index')}}">
                <div class="card padding-4 animate fadeLeft">
                    <div class="row">
                        <div class="col s5 m5">
                            <p class="mb-0">لیست علاقه مندی ها</p>
                        </div>
                        <div class="col s7 m7 right-align">
                            <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">favorite_border</i>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{url('shop/product')}}">
                <div class="card padding-4 animate fadeLeft">
                    <div class="row">
                        <div class="col s5 m5">
                            <p class="mb-0">فروشگاه</p>
                        </div>
                        <div class="col s7 m7 right-align">
                            <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">shopping_cart</i>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col s12 m6 l8">
            <div class="card subscriber-list-card animate fadeRight">
                <div class="card-content pb-1">
                    <h4 class="card-title mb-0">لیست قیمت ارزها </h4>
                </div>
                <table class="subscription-table responsive-table highlight">
                    <thead>
                    <tr>
                        <th>ارز</th>
                        <th>تاریخ بروزرسانی</th>
                        <th>قیمت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>دلار</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->usd ?? ''}} تومان </td>
                    </tr>
                    <tr>
                        <td>یورو</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->euro ?? ''}} تومان </td>
                    </tr>
                    <tr>
                        <td>پوند</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->pound ?? ''}} تومان </td>
                    </tr>
                    <tr>
                        <td>دلار کانادا</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->canada_dollar ?? ''}} تومان </td>
                    </tr>
                    <tr>
                        <td>درهم امارات</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->uae ?? ''}} تومان </td>
                    </tr>
                    <tr>
                        <td>لیر</td>
                        <td>{{$currency->created_at ?? ''}}</td>
                        <td> {{$currency->tl ?? ''}} تومان </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="justify-content-center mt-5 mb-2">
        <h6 class="center">جدیدترین کالاها</h6>
    </div>
    <div class="row">
        @foreach($previousProducts as $previousKey=>$previousProduct)
            @if(fmod($previousKey+1,4) == 0)<div class="row">@endif

            <div class="col s12 m3">
                <div class="card animate fadeRight">
                    <div class="card-content center">
                        <img src="{{asset($previousProduct->media->first()->file) ?? ''}}" alt="" class="responsive-img" />
                        <p><b>{{$previousProduct->title ?? ''}}</b></p>
                    </div>
                    <div class="card-action border-non center">
                        <a href="{{url("shop/product/$previousProduct->id")}}" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">{{$previousProduct->final_price ?? ''}} تومان</a>
                    </div>
                </div>
            </div>
                @if(fmod($previousKey+1,4) == 0)</div>@endif
        @endforeach
    </div>

    <div class="justify-content-center mt-5 mb-2">
        <h6 class="center">پربازدیدترین کالاها</h6>
    </div>
    <div class="row">
        @foreach($popularProducts as $popularProduct)
            <div class="col s12 m3">
                <div class="card animate fadeRight">
                    <div class="card-content center">
                        <img src="{{asset($popularProduct->media->first()->file) ?? ''}}" alt="" class="responsive-img" />
                        <p><b>{{$popularProduct->title ?? ''}}</b></p>
                    </div>
                    <div class="card-action border-non center">
                        <a href="{{url("shop/product/$popularProduct->id")}}" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">{{$popularProduct->final_price ?? ''}} تومان</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection
