<!--media banner start-->
<section class=" b-g-white section-big-pt-space">
    <div class="container">
        <div class="row hot-1">
            <div class="col-lg-3 col-sm-6  col-12  ">
                <div class="slide-1   no-arrow">
                    <!-- on sale start -->
                    <div>
                        <div class="media-banner">
                            <div class="media-banner-box">
                                <div class="media-heading">
                                    <h5>on sale</h5>
                                </div>
                            </div>
                            @foreach($onSales as $onSale)
                            <div class="media-banner-box">
                                <div class="media">
                                    <a href="{{ url('detail/'.$onSale->id) }}"><img src="{{asset(explode(',', $onSale->products_image)[0]) }}" class="img-fluid  " alt="{{ $onSale->products_name }}"></a>
                                    <div class="media-body">
                                        <div class="media-contant">
                                            <div>
                                                <div class="rating">
                                                @if(star_rating($onSale->id))
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= star_rating($onSale->id))
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
                                              {{ $onSale->products_name }}
                                                </p>
                                                <h6>@money($onSale->products_price)</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="media-banner-box">
                                <div class="media-view">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- on sale end -->
                </div>
            </div>
            <div class="col-lg-2 col-sm-6  col-12">
                <div class="Jewellery-banner">
                    <a>save 30% off</a>
                    <h6>Jewellery</h6>
                </div>
            </div>
            <div class="col-lg-7  col-sm-12 col-12  ">
                <div class="hot-deal">
                    <div class="hot-deal-box">
                        <div class="slide-1">
                        <!-- todays deal start -->
                       
                            <div>
                                <div class="hot-deal-contain1 hot-deal-banner-1">
                                    <div class="hot-deal-heading">
                                        <h5>today’s hot deal</h5>
                                    </div>
                                    <div class="row hot-deal-subcontain">
                                        <div class="col-lg-4 col-sm-4 col-12">
                                            <div class="hotdeal-right-slick-1 no-arrow">
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/1.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/3.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/4.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="hot-deal-center">
                                                <div>
                                                    <div class="timer">
                                                        <p class="demo">
                                                   <span>
                                                       25
                                                       <span>days</span>
                                                   </span>
                                                            <span>:</span>
                                                            <span>
                                                        12
                                                        <span>hrs</span>
                                                    </span>
                                                            <span>:</span>
                                                            <span>
                                                        45
                                                        <span>min</span>
                                                    </span>
                                                            <span>:</span>
                                                            <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                        </p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div>
                                                        <h5>simply dummy text of the printing</h5>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            it is a long established fact that a reader.
                                                        </p>
                                                        <div class="price">
                                                            <span>$45.00</span>
                                                            <span>$50.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 p-l-md-0">
                                            <div class="hotdeal-right-nav-1">
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/1.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/3.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/4.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- todays deal edn -->
                            <div>
                                <div class="hot-deal-contain1 hot-deal-banner-1">
                                    <div class="hot-deal-heading">
                                        <h5>today’s hot deal</h5>
                                    </div>
                                    <div class="row hot-deal-subcontain">
                                        <div class="col-lg-4 col-sm-4 col-12">
                                            <div class="hotdeal-right-slick-1 no-arrow">
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/4.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/3.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                                <div class="right-slick-img"><img src="{{asset('web/images/layout-1/hot-deal/1.jpg') }}" alt="hot-deal" class="img-fluid  "></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="hot-deal-center">
                                                <div>
                                                    <div class="timer">
                                                        <p class="demo1">
                                                   <span>
                                                       25
                                                       <span>days</span>
                                                   </span>
                                                            <span>:</span>
                                                            <span>
                                                        12
                                                        <span>hrs</span>
                                                    </span>
                                                            <span>:</span>
                                                            <span>
                                                        45
                                                        <span>min</span>
                                                    </span>
                                                            <span>:</span>
                                                            <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                        </p>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div>
                                                        <h5>simply dummy text of the printing</h5>
                                                    </div>
                                                    <div>
                                                        <p>
                                                            it is a long established fact that a reader.
                                                        </p>
                                                        <div class="price">
                                                            <span>$45.00</span>
                                                            <span>$50.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 p-l-md-0">
                                            <div class="hotdeal-right-nav-1">
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/4.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/3.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/2.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                                <div><img src="{{asset('web/images/layout-1/hot-deal/1.jpg') }}" alt="hot-deal" class="img-fluid  " ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--media banner end-->
