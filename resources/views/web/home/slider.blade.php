<!-- slider -->
<section class="theme-slider section-pt-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-8 col-lg-9 offset-xl-2 px-abjust">
                <div class="slide-1 no-arrow">
                    <!-- slider start -->
                    @foreach($sliders as $slider)
                    <div>
                        <div class="slider-banner">
                            <div class="slider-img">
                                <ul class="layout2-slide-1">

                                    <li id="img-{{$slider->id}}"><img src="{{asset($slider->slider_image)}}" class="img-fluid" alt="{{$slider->slider_name}}"></li>                           
                                </ul>
                            </div>
                            <div class="slider-banner-contain">
                                <div>
                                    <h4>{{ $slider->header_one }}</h4>
                                    <h1>{{ $slider->header_two }}</h1>
                                    <h2>{{ $slider->header_three }}</h2>
                                    <a class="btn btn-rounded">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- slider end -->
                </div>
            </div>
              
            <div class="col-xl-2 col-sm-3 pl-0 offer-banner">
                <div class="offer-banner-img">
                    <img src="{{asset('web/images/layout-1/offer-banner.png') }}" alt="offer-banner" class="img-fluid  ">
                </div>
                <div class="banner-contain">
                    <div>
                        <h5>Special Offer for you</h5>
                        <div class="discount-offer"><h1>50%</h1><sup>off</sup></div >
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>