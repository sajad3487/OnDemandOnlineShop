@extends('layouts.shop.firstPageTemplate')
@section('content')

    @include('layouts.shop.shopHeader')


    <!-- category content area start -->
    <div class="category-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="category-sidebar"><!-- category sidebar -->
                        <div class="category-filter-widget"><!-- category-filter-widget -->
                            <div id="accordion">
                                @foreach($categories as $key=>$category)
                                    @if($category->id != 1)
                                        <div class="mt-3">
                                            <div class="" id="heading-{{$key}}">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link p-0 collapsed" data-toggle="collapse" data-target="#collapse-{{$key}}" aria-expanded="false" aria-controls="collapse-{{$key}}">
                                                        <h6>{{$category->title}} </h6>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse-{{$key}}" class="collapse" aria-labelledby="heading-{{$key}}" data-parent="#accordion">
                                                <div class="mr-4">
                                                    @foreach($category->child as $child)
                                                        <ul>
                                                            <li class="my-2 "> <a href="{{url("shop/category/$child->id")}}" class="text-primary">{{$child->title}} </a></li>
                                                            @foreach($child->grandChild as $grandChild)
                                                                <li class="my-1"> -- <a href="{{url("shop/category/$grandChild->id")}}" >{{$grandChild->title}} </a></li>
                                                            @endforeach
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        @endif

                                @endforeach

                            </div>
                        </div><!-- //.category-filter-widget -->
                    </div><!-- //. category sidebar -->
                </div>
                <div class="col-lg-9">
                    <div class="right-content-area"><!-- right content area -->
                        <div class="top-content"><!-- top content -->
                            <div class="left-conent">
                                <span class="cat">{{$category_name ?? "تمامی کالاها"}}</span>
                            </div>
                        </div><!-- //. top content -->
                        <div class="bottom-content"><!-- top content -->
                            <div class="row">
                                @if($products == null)
                                    <div class="mr-4"> کالایی در این دسته بندی وجود ندارد </div>
                                @else
                                    @foreach($products as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb border">
                                            <img src="{{asset($product['media'][0]['file'])}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="{{url('/')}}" class="btn btn-primary">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">{{$product['subtitle'] ?? ''}}</span>
                                            <a href="{{url("shop/product/".$product['id'])}}"><h4 class="title">{{$product['title'] ?? ''}}</h4></a>
                                            <div class="price"><span class="sprice">{{$product['final_price'] ?? ''}} تومان</span> <del class="dprice">{{$product['price'] ?? ''}} تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                    @endforeach
                                @endif
                            </div>
                        </div><!-- //.top content -->
                    </div><!-- //. right content area -->
                </div>
            </div>
        </div>
    </div>
    <!-- category content area end -->


    @include('layouts.shop.shopLeftSidebar')
    @include('layouts.shop.shopBasket')
    @include('layouts.shop.shopFooter')
    @include('layouts.shop.shopBackToTop')
    @include('layouts.shop.shopPreloader')

@endsection
