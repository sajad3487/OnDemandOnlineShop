
<!-- filter area home four start -->
<div class="filter-ara-home-five-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-area-menu-home-masonry-six"><!-- filter area menu home masonry -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                            <div class="row">
                                @foreach($popularProduct as $product)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="single-new-collection-item"><!-- single new collections -->
                                            <div class="thumb border" >
                                                <img class="" src="{{asset($product->media[0]->file ?? '')}}" alt="{{$product->media[0]->alternative_text ?? 'مهویتالی'}}">
                                                <div class="hover">
                                                    <a href="{{url("shop/product/$product->id")}}" class="btn btn-primary">مشاهده کالا</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <a href="{{url("shop/category/".$product->category->first()->id) ?? ''}}"><span class="category">{{$product->category->first()->title ?? ''}}</span> </a>

                                                <a href="{{url("shop/product/".$product->id)}}"><h4 class="title">{{$product->title ?? ''}}</h4></a>
                                                <div class="price"><span class="sprice">{{$product->final_price ?? ''}} تومان</span> <del class="dprice">{{$product->price ?? ''}} تومان</del></div>
                                            </div>
                                        </div><!-- //. single new collections  -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><!-- //.filter area menu home masonry -->
            </div>
        </div>
    </div>
</div>
<!-- filter area home four end -->
