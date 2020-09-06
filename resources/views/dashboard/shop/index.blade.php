@extends('layouts.shop.firstPageTemplate')
@section('content')

    @include('layouts.shop.shopHeader')
    @include('layouts.shop.shopLeftSidebar')
    @include('layouts.shop.shopBasket')
    @include('dashboard.shop.shopSlider')
    @include('dashboard.shop.shopPromotinal')
    @include('dashboard.shop.shopFilter')
    @include('dashboard.shop.shopVideo')
    @include('dashboard.shop.shopFilterSecond')
    @include('dashboard.shop.shopBanner')
    @include('layouts.shop.shopFooter')
    @include('layouts.shop.shopBackToTop')
    @include('layouts.shop.shopPreloader')

@endsection
