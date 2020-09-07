
<!-- surprise area start -->
<div class="surprise-area light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="surprise-inner"><!-- surprise inner -->
                    <div class="video-thumb">
                        <img src="{{asset($surprise->media_path) ?? asset('front/img/surprise-image.jpg')}}" alt="surprise image">
                        <div class="hover">
                            <a href="{{$surprise->button_link ?? ''}}" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="content-area">
                        <h3 class="title">{{$surprise->title ?? ''}}</h3>
                    </div>
                </div><!-- //.surprise inner -->
            </div>
        </div>
    </div>
</div>
<!-- surprise area end -->
