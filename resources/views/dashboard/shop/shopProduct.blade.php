@extends('layouts.shop.firstPageTemplate')
@section('content')

    @include('layouts.shop.shopHeader')


    <!-- product details content area  start -->
    <div class="product-details-content-area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @if($product->media->count() == 1)
                        @foreach($product->media as $key=>$media)
                        <div class="single-product-thumb">
                            <img src="{{asset($media->file)}}" alt="product details image">
                        </div>
                        @endforeach

                    @else
                    <div class="left-content-area"><!-- left content area -->
                        <div class="product-details-slider" id="product-details-slider" data-slider-id="1">
                            @foreach($product->media as $key=>$media)
                            <div class="single-product-thumb">
                                <img src="{{asset($media->file)}}" alt="product details image">
                            </div>
                            @endforeach

                        </div>
                        <ul class="owl-thumbs product-deails-thumb center" data-slider-id="1">
                            @foreach($product->media as $key=>$media)
                            <li class="owl-thumb-item">
                                <img src="{{asset($media->file)}}" alt="product details thumb" style="height: 100px; width: 100px">
                            </li>
                            @endforeach

                        </ul>


                    </div><!-- //.left content area -->
                        @endif
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area"><!-- right content area -->
                        <div class="top-content">
                            <ul class="review">
                                <li><i class="@if($product->score <= 1 && $product->score != null) fas fa-star @else far fa-star @endif "></i></li>
                                <li><i class="@if($product->score <= 2 && $product->score != null) fas fa-star @else far fa-star @endif"></i></li>
                                <li><i class="@if($product->score <= 3 && $product->score != null) fas fa-star @else far fa-star @endif"></i></li>
                                <li><i class="@if($product->score <= 4 && $product->score != null) fas fa-star @else far fa-star @endif"></i></li>
                                <li><i class="@if($product->score <= 5 && $product->score != null) fas fa-star @else far fa-star @endif"></i></li>
                                <li class="reviewes">{{$product->view ?? 0}} <small>بازدید</small> </li>
                            </ul>
{{--                            <span class="orders">جدید</span>--}}
                        </div>
                        <div class="bottom-content">
                            <span class="cat">{{$product->subtitle ?? ''}}</span>
                            <h3 class="title">{{$product->title ?? ''}}</h3>
                            <div class="price-area">
                                <div class="left">
                                    <span class="sprice">{{$product->final_price ?? ''}} تومان</span>
                                    <span class="dprice"><del>{{$product->price ?? ''}} تومان</del></span>
                                </div>
{{--                                <div class="right">--}}
{{--                                    <a href="#" class="size">جدول سایزبندی</a>--}}
{{--                                </div>--}}
                            </div>
                            <ul class="product-spec">
                                <li>برند:  <span class="right">{{$product->brand ?? ''}} </span></li>
                                <li>کد محصول: <span class="right">SH{{$product->id ?? ''}}</span></li>
                                @if($product->stock > 0)
                                    <li>موجود:  <span class="right base-color"> موجود است </span></li>
                                @else
                                    <li>موجود:  <span class="right"> موجود نیست </span></li>
                                @endif
                            </ul>
{{--                            <div class="pdescription">--}}
{{--                                <h4 class="title">توضیحات :</h4>--}}
{{--                                <p>{{$product->description ?? ''}}</p>--}}
{{--                            </div>--}}
                            <div class="paction">
                                <form action="{{url("shop/cart/add")}}" method="post">
                                    @csrf
                                    <div class="qty">
                                        تعداد :
                                        <input type="number" name="quantity" class="input-field col-lg-4 mr-4" style="-moz-appearance: textfield;" value="1">
                                        <input type="number" class="d-none" name="product_id" value="{{$product->id}}">
                                    </div>
                                    {{--                                <ul class="activities">--}}
                                    {{--                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                                    {{--                                    <li><a href="#"><i class="fas fa-hourglass"></i></a></li>--}}
                                    {{--                                    <li><a href="#"><i class="fas fa-share-square"></i></a></li>--}}
                                    {{--                                </ul>--}}
                                    <div class="btn-wrapper">
                                        <button type="submit" class="btn boxed-btn">افزودن به سبد</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- //. right content area -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-area ">
                        <div class="product-details-tab-nav pt-5">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="item-review-tab" data-toggle="tab" href="#item_review" role="tab" aria-controls="item_review" aria-selected="true">مشخصات فنی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="descr-tab" data-toggle="tab" href="#descr" role="tab" aria-controls="descr" aria-selected="false">توضیحات</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" >
                            <div class="tab-pane fade show active" id="item_review" role="tabpanel" aria-labelledby="item-review-tab">
                                <div class="descr-tab-content">
                                    <h4 class="title">مشخصات فنی</h4>
                                    <p>
                                        {{$product->spec ?? ''}}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="descr" role="tabpanel" aria-labelledby="descr-tab">
                                <div class="descr-tab-content">
                                    <h4 class="title">توضیحات محصول</h4>
                                    <p>
                                        {{$product->description ?? ''}}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details content area end -->
    <!-- recently added start -->
    <div class="recently-added-area product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="recently-added-nav-menu"><!-- recently added nav menu -->
                        <ul>
                            <li>به تازگی اضافه شده</li>
                        </ul>
                    </div><!-- //.recently added nav menu -->
                </div>
                <div class="col-lg-12">
                    <div class="recently-added-carousel" id="recently-added-carousel"><!-- recently added carousel -->
                        @foreach($products as $last_product)
                        <div class="single-new-collection-item">
                            <div class="thumb">
                                <img src="{{asset($last_product->media->first()->file)}}" alt="product image">
                                <div class="hover">
                                    <a href="{{url("shop/product/$last_product->id") ?? ''}}" class="btn btn-primary">مشاهده کالا</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="{{url("shop/product/$last_product->id") ?? ''}}" class="category">{{$last_product->category->first()->title ?? ''}}</a>
                                <h4 class="title">{{$last_product->title ?? ''}}</h4>
                                <div class="price"><span class="sprice">{{$last_product->final_price ?? ''}} تومان</span> <del class="dprice">{{$last_product->price ?? ''}} تومان</del></div>
                            </div>
                        </div>
                            @endforeach
                    </div><!-- //. recently added carousel -->
                </div>
            </div>
        </div>
    </div>
    <!-- recently added end -->
    <div class="body-overlay" id="body-overlay"></div>

    @include('layouts.shop.shopLeftSidebar')
    @include('layouts.shop.shopBasket')
    @include('layouts.shop.shopFooter')
    @include('layouts.shop.shopBackToTop')
    @include('layouts.shop.shopPreloader')

@endsection
