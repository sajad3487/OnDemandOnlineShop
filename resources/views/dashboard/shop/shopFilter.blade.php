<!-- filter area home four start -->
<div class="filter-ara-home-five">
    <div class="container">
        <div class="center-align text-center mb-4">
            <h3>جدیدترین کالاها</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-area-menu-home-masonry"><!-- filter area menu home masonry -->

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="bestseller_2" role="tabpanel" aria-labelledby="bestseller-tab_2">
                            <div class="row">
                                @foreach($latestProduct as $lproduct)
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb border" >
                                            <img class="" src="{{asset($lproduct->media[0]->file ?? '')}}" alt="{{$lproduct->media[0]->alternative_text ?? 'مهویتالی'}}">
                                            <div class="hover">
                                                <a href="{{url("shop/product/$lproduct->id")}}" class="btn btn-primary">مشاهده کالا</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <a href="{{url("shop/category/".$lproduct->category->first()->id) ?? ''}}"><span class="category">{{$lproduct->category->first()->title ?? ''}}</span> </a>

                                            <a href="{{url("shop/product/".$lproduct->id)}}"><h4 class="title">{{$lproduct->title ?? ''}}</h4></a>
                                            <div class="price"><span class="sprice">{{$lproduct->final_price ?? ''}} تومان</span> <del class="dprice">{{$lproduct->price ?? ''}} تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="newflower_2" role="tabpanel" aria-labelledby="newflower-tab_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/01.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">ورزشی</span>
                                            <a href="#"><h4 class="title">تی شرت سیاه برک</h4></a>
                                            <div class="price"><span class="sprice">23.00 تومان</span> <del class="dprice">55.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/02.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش تیره</h4></a>
                                            <div class="price"><span class="sprice">50.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/03.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">لوازم جانبی</span>
                                            <a href="#"><h4 class="title">میلو هوروبرد</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">99.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/04.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش پیاده روی</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">120.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/05.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کلاه</span>
                                            <a href="#"><h4 class="title">کلاه قرمز</h4></a>
                                            <div class="price"><span class="sprice">10.00 تومان</span> <del class="dprice">50.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/06.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">دوچرخه</span>
                                            <a href="#"><h4 class="title">دوچرخه معمولی</h4></a>
                                            <div class="price"><span class="sprice">700.00 تومان</span> <del class="dprice">1500.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/07.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">موتور</span>
                                            <a href="#"><h4 class="title">دوچرخه موتوری</h4></a>
                                            <div class="price"><span class="sprice">90.00 تومان</span> <del class="dprice">1200.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/08.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">الکترونیکی</span>
                                            <a href="#"><h4 class="title">عنوان محصول</h4></a>
                                            <div class="price"><span class="sprice">37.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="topseller_2" role="tabpanel" aria-labelledby="topseller-tab_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/01.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">ورزشی</span>
                                            <a href="#"><h4 class="title">تی شرت سیاه برک</h4></a>
                                            <div class="price"><span class="sprice">23.00 تومان</span> <del class="dprice">55.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/02.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش تیره</h4></a>
                                            <div class="price"><span class="sprice">50.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/03.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">لوازم جانبی</span>
                                            <a href="#"><h4 class="title">میلو هوروبرد</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">99.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/04.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش پیاده روی</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">120.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/05.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کلاه</span>
                                            <a href="#"><h4 class="title">کلاه قرمز</h4></a>
                                            <div class="price"><span class="sprice">10.00 تومان</span> <del class="dprice">50.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/06.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">دوچرخه</span>
                                            <a href="#"><h4 class="title">دوچرخه معمولی</h4></a>
                                            <div class="price"><span class="sprice">700.00 تومان</span> <del class="dprice">1500.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/07.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">موتور</span>
                                            <a href="#"><h4 class="title">دوچرخه موتوری</h4></a>
                                            <div class="price"><span class="sprice">90.00 تومان</span> <del class="dprice">1200.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/08.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">الکترونیکی</span>
                                            <a href="#"><h4 class="title">عنوان محصول</h4></a>
                                            <div class="price"><span class="sprice">37.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="specialflower_2" role="tabpanel" aria-labelledby="specialflower-tab_2">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/01.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">ورزشی</span>
                                            <a href="#"><h4 class="title">تی شرت سیاه برک</h4></a>
                                            <div class="price"><span class="sprice">23.00 تومان</span> <del class="dprice">55.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/02.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش تیره</h4></a>
                                            <div class="price"><span class="sprice">50.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/03.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">لوازم جانبی</span>
                                            <a href="#"><h4 class="title">میلو هوروبرد</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">99.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/04.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کفش</span>
                                            <a href="#"><h4 class="title">کفش پیاده روی</h4></a>
                                            <div class="price"><span class="sprice">78.00 تومان</span> <del class="dprice">120.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/05.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">کلاه</span>
                                            <a href="#"><h4 class="title">کلاه قرمز</h4></a>
                                            <div class="price"><span class="sprice">10.00 تومان</span> <del class="dprice">50.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/06.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">دوچرخه</span>
                                            <a href="#"><h4 class="title">دوچرخه معمولی</h4></a>
                                            <div class="price"><span class="sprice">700.00 تومان</span> <del class="dprice">1500.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/07.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">موتور</span>
                                            <a href="#"><h4 class="title">دوچرخه موتوری</h4></a>
                                            <div class="price"><span class="sprice">90.00 تومان</span> <del class="dprice">1200.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{asset('front/img/flower/08.jpg')}}" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="#" class="addtocart">افزودن به سبد</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <span class="category">الکترونیکی</span>
                                            <a href="#"><h4 class="title">عنوان محصول</h4></a>
                                            <div class="price"><span class="sprice">37.00 تومان</span> <del class="dprice">80.00 تومان</del></div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.filter area menu home masonry -->
            </div>
        </div>
    </div>
</div>
<!-- filter area home four end -->
