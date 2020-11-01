@extends("web.layout")


<!-- home page contents-->
@section("content")
    @include("web.home.slider")
    @include("web.home.banner")
    @include("web.home.hot-deal")
    @include("web.home.discount")
    @include("web.home.collection-banner")
    @include("web.home.tab-category")
    @include("web.home.deal-banner")
    @include("web.home.rounded-category")
    @include("web.home.media-banner")
    @include("web.home.special-products")
    @include("web.home.newsletter")
    @include("web.home.contact-banner")
@endsection