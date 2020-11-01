<!--media-banner start-->
<section class="section-big-py-space b-g-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="media-slide no-arrow">
                    <!-- media banner end -->
                    <div>
                        <div class="media-banner ">
                            <div class="media-banner-box">
                                <div class="media-heading">
                                    <h5>New Products</h5>
                                </div>
                            </div>
                            @foreach($newProducts as $products)
                            <div class="media-banner-box">
                                <div class="media">
                                <a href="{{ url('detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[0]) }}" class="img-fluid  " alt="{{ $products->products_name }}"></a>
                                    <div class="media-body">
                                        <div class="media-contant">
                                            <div>
                                                <div class="rating">
                                                @if(star_rating($products->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($products->id))
                                                        <i class="fa fa-star text-warning"></i>
                                                        @else
                                                        <i class="fa fa-star text-secondary"></i>
                                                        @endif
                                                    @endfor
                                                    @else
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <i class="fa fa-star text-secondary"></i>
                                                    @endfor
                                                @endif
                                                </div>
                                                <p>
                                                   {{$products->products_name}}
                                                </p>
                                                <h6>@money($products->products_price)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="media-banner-box">
                                <div class="media-view">
                                    <h5><a href="{{ url('products/new-products') }}">View More</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- media banner end -->

                    <!-- media banner start -->
                    <div>
                        <div class="media-banner">
                            <div class="media-banner-box">
                                <div class="media-heading">
                                    <h5>Feature products</h5>
                                </div>
                            </div>
                            @foreach($featuredProducts as $products)
                            <div class="media-banner-box">
                                <div class="media">
                                <a href="{{ url('detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[1]) }}" class="img-fluid" alt="{{ $products->products_name }}"></a>
                                    <div class="media-body">
                                        <div class="media-contant">
                                            <div>
                                                <div class="rating">
                                                @if(star_rating($products->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($products->id))
                                                        <i class="fa fa-star text-warning"></i>
                                                        @else
                                                        <i class="fa fa-star text-secondary"></i>
                                                        @endif
                                                    @endfor
                                                    @else
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <i class="fa fa-star text-secondary"></i>
                                                    @endfor
                                                @endif
                                                </div>
                                                <p>
                                                {{ $products->products_name }}
                                                </p>
                                                <h6>@money($products->products_price)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="media-banner-box">
                                <div class="media-view">
                                <h5><a href="{{ url('products/feature-products') }}">View More</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- media banner end -->

                    <!-- media banner start -->
                    <div >
                        <div class="media-banner">
                            <div class="media-banner-box">
                                <div class="media-heading">
                                    <h5>Best Sellers</h5>
                                </div>
                            </div>
                            @foreach($bestSellers as $products)
                            <div class="media-banner-box">
                                <div class="media">
                                <a href="{{ url('detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[1]) }}" class="img-fluid  " alt="{{ $products->products_name}}"></a>
                                    <div class="media-body">
                                        <div class="media-contant">
                                            <div>
                                                <div class="rating">
                                                @if(star_rating($products->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($products->id))
                                                        <i class="fa fa-star text-warning"></i>
                                                        @else
                                                        <i class="fa fa-star text-secondary"></i>
                                                        @endif
                                                    @endfor
                                                    @else
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <i class="fa fa-star text-secondary"></i>
                                                    @endfor
                                                @endif
                                                </div>
                                                <p>
                                                   {{$products->products_name}}
                                                </p>
                                                <h6>@money($products->products_price)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="media-banner-box">
                                <div class="media-view">
                                    <h5><a href="{{ url('products/best-sellers') }}">View More</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- media banner end -->

                    <!-- media banner start -->
                    <div >
                        <div class="media-banner border-0">
                            <div class="media-banner-box">
                                <div class="media-heading">
                                    <h5>50% off</h5>
                                </div>
                            </div>
                            @foreach($fiftyPercentOff as $products)
                            <div class="media-banner-box">
                                <div class="media">
                                    <a href="{{ url('detail/'.$products->id) }}"><img src="{{ asset(explode(',', $products->products_image)[0]) }}" class="img-fluid  " alt="{{ $products->products_name }}"></a>
                                    <div class="media-body">
                                        <div class="media-contant">
                                            <div>
                                                <div class="rating">
                                                @if(star_rating($products->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($products->id))
                                                        <i class="fa fa-star text-warning"></i>
                                                        @else
                                                        <i class="fa fa-star text-secondary"></i>
                                                        @endif
                                                    @endfor
                                                    @else
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <i class="fa fa-star text-secondary"></i>
                                                    @endfor
                                                @endif
                                                </div>
                                                <p>
                                                    Generator
                                                    on Internet.
                                                </p>
                                                <h6>@money($products->products_price)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="media-banner-box">
                                <div class="media-view">
                                    <h5><a href="{{ url('products/slashed') }}">View More</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- media banner end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--media-banner end-->
