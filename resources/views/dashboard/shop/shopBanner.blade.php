
@if(isset($banner_1->status) || isset($banner_2->status))
<!-- banner area home 5 start  -->
    @if($banner_1->status == 1 || $banner_2->status == 1)
<div class="banner-area-home-5">
    <div class="container">
        <div class="row">
            @if($banner_1->status == 1)
            <div class="col-lg-6">
                <div class="banner-image"><!-- banner image -->
                    <img src="{{asset($banner_1->media_path) ?? asset('front/img/banner-add/02-big.jpg')}}" alt="banner image">
                </div>
            </div>
            @endif
            @if($banner_2->status == 1)
            <div class="col-lg-6">
                <div class="banner-image"><!-- //.banner image -->
                    <img src="{{asset($banner_2->media_path) ??asset('front/img/banner-add/02-bg.jpg')}}" alt="banner image">
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endif
<!-- banner area home 5 end  -->
@endif
