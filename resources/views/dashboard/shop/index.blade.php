@extends('layouts.shop.firstPageTemplate')
@section('content')

    @include('layouts.shop.shopHeader')
    @include('layouts.shop.shopLeftSidebar')
    @include('layouts.shop.shopBasket')
    @if($slider->status == 1)@include('dashboard.shop.shopSlider') @endif
    @include('dashboard.shop.shopPromotinal')
    @if($filtered_one->status == 1)@include('dashboard.shop.shopFilter') @endif
    @if($surprise->status == 1)@include('dashboard.shop.shopVideo') @endif
    @if($filtered_two->status == 1)@include('dashboard.shop.shopFilterSecond') @endif
    @include('dashboard.shop.shopBanner')
    @include('layouts.shop.shopFooter')
    @include('layouts.shop.shopBackToTop')
    @include('layouts.shop.shopPreloader')


@endsection
