@if($promotional1->status == 1 || $promotional2->status == 1)
<!-- promotional area seven start -->
<div class="promotinal-area-seven">
    <div class="container">
        <div class="row">
            @if($promotional1->status == 1)
            <div class="col-lg-6">
                <div class="promotional-banner-area right"><!-- promotinal banner area  -->
                    <div class="img-wrapper">
                        <img src="{{asset($promotional1->media_path) ?? asset('front/img/promotional/12.jpg')}}" alt="promotional images">
                        <div class="hover">
                            <div class="hover-inner">
                                <h2 class="title ">{{$promotional1->title ?? ''}}</h2>
                                <div class="btn-wrapper wow fadeIn">
                                    <a href="{{$promotional1->button_link ?? ''}}" class="boxed-btn">{{$promotional1->button_text ?? ''}}</a>                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.promotinal banner area  -->
            </div>
            @endif
            @if($promotional2->status == 1)
            <div class="col-lg-6">
                <div class="promotional-banner-area left"><!-- promotinal banner area  -->
                    <div class="img-wrapper">
                        <img src="{{asset($promotional2->media_path) ??asset('front/img/promotional/13.jpg')}}" alt="promotional images">
                        <div class="hover">
                            <div class="hover-inner">
                                <h2 class="title ">{{$promotional2->title ?? ''}}</h2>
                                <div class="btn-wrapper wow fadeIn">
                                    <a href="{{$promotional2->button_link ?? ''}} ?? '" class="boxed-btn">{{$promotional2->button_text ?? ''}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- //.promotinal banner area  -->
            </div>
            @endif
        </div>
    </div>
</div>
<!-- promotional area seven end -->
@endif
