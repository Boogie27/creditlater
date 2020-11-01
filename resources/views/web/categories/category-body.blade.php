
<!-- section start -->
<section class="section-big-pt-space ratio_asos bg-light">
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-sm-3 collection-filter category-page-side">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block creative-card creative-inner category-side">
                    <form action="{{ url('category/'.$categories->category_name) }}" method="GET" id="filterField">
                        <!-- brand filter start -->
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title mt-0">brand</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter"  id="brandSection">
                                @if($categoryBrands)
                                    @foreach($categoryBrands as $brands)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{ $brands->id }}" {{ $brands->id == request()->brand_id ? 'checked' : ''}}>
                                        <label class="custom-control-label" for="{{ $brands->id }}">{{ $brands->brand_name}}</label>
                                    </div>
                                    @endforeach
                                @else
                                    <div class="alert-danger p-3">There are no Brands available</div>
                                @endif
                                </div>
                            </div>
                           
                        </div>
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content" id="priceFilter">
                                <div class="collection-brand-filter">
                                    @if(count($priceRange))
                                    @foreach($priceRange as $price)
                                    <div class="custom-control custom-checkbox collection-filter-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="price-{{ $price->id }}" {{ $price->id == request()->price_id ? 'checked' : ''}}>
                                        <label class="custom-control-label" for="price-{{ $price->id }}"> {{ $price->price_from }} - {{ $price->price_to }}</label>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="formField"><br>
                            <input type="hidden" name="brand_id" id="hiddenBrandField" value="{{ request()->brand_id }}">
                            <input type="hidden" name="price_id" id="hiddenPriceField" value="{{ request()->price_id }}">
                            <button type="submit"  class="">Filter Products</button>
                            @csrf
                        </div>
                    </form>
                    </div>
                    <!-- silde-bar colleps block end here -->
                    <!-- side-bar single product slider start -->
                    <div class="theme-card creative-card creative-inner">
                        <h5 class="title-border">new product</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/001.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/002.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media ">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/003.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                            <div>
                                <div class="media">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/003.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/001.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="img-fluid " src="{{ asset('web/images/product-sidebar/002.jpg') }}" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div><a href="product-page(no-sidebar).html"><h6>Slim Fit Cotton Shirt</h6></a>
                                        <h4>$500.00</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- side-bar single product slider end -->
                    <!-- side-bar banner start here -->
                    <div class="collection-sidebar-banner">
                        <a href="#"><img src="{{ asset('web/images/category/side-banner.png') }}" class="img-fluid " alt=""></a>
                    </div>
                    <!-- side-bar banner end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="top-banner-wrapper">
                                    <a href="#"><img src="{{ asset($categories->category_banner_image) }}" class="img-fluid " alt=""></a>
                                    <div class="top-banner-content small-section">
                                        <h4>{{ $categories->category_name }} Category</h4>
                                    </div>
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn  "><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <!-- showing  products tab start -->
                                        @php($product = $categories->products)
                                            @if(isset($productFilter))
                                                @php( $product = $productFilter)
                                            @endif
                                        @if(count($product))
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing Products 1-24 of 10 Result</h5>
                                                    </div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="{{ asset('web/images/category/icon/2.png') }}" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="{{ asset('web/images/category/icon/3.png') }}" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="{{ asset('web/images/category/icon/4.png') }}" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="{{ asset('web/images/category/icon/6.png') }}" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Products Par Page</option>
                                                            <option value="Low to High">50 Products Par Page</option>
                                                            <option value="Low to High">100 Products Par Page</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option value="High to low">Sorting items</option>
                                                            <option value="Low to High">50 Products</option>
                                                            <option value="Low to High">100 Products</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- showing  products tab end -->
                                    </div>
                                         
                                    <div class="product-wrapper-grid">
                                        @php($product = $categories->products)
                                            @if(isset($productFilter))
                                                @php( $product = $productFilter)
                                            @endif
                                        @if(count($product))
                                        <div class="row">
                                           <!-- category products start -->
                                            @foreach($product as $category)
                                            <div class="col-xl-3 col-md-4 col-6  col-grid-box">
                                                <div class="product">
                                                    <div class="product-box">
                                                        <div class="product-imgbox">
                                                            <div class="product-front">
                                                                <a href="{{ url('detail/'.$category->id) }}"><img src="{{ asset(explode(',', $category->products_image)[0]) }}" class="img-fluid  " alt="{{ $category->products_name}}"></a>
                                                            </div>
                                                            <div class="product-back">
                                                                <a href="{{ url('detail/'.$category->id) }}"><img src="{{ asset(explode(',', $category->products_image)[0]) }}" class="img-fluid  " alt="{{ $category->products_name}}"></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail detail-center ">
                                                            <div class="detail-title">
                                                                <div class="detail-left">
                                                                    <div class="rating-star">
                                                                    @if(star_rating($category->id))
                                                                        @for($i = 1; $i <= 5; $i++)
                                                                            @if($i <= star_rating($category->id))
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
                                                                    <p>{{ $category->products_detail}}</p>
                                                                    <a href="{{ url('detail/'.$category->id) }}">
                                                                        <h6 class="price-title">
                                                                           {{ $category->products_name}}
                                                                        </h6>
                                                                    </a>
                                                                </div>
                                                                <div class="detail-right">
                                                                    <div class="check-price">
                                                                       @money($category->products_price_slash)
                                                                    </div>
                                                                    <div class="price">
                                                                        <div class="price">
                                                                         @money($category->products_price)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="icon-detail">
                                                                <button data-toggle="modal" class="quick-add-to-cartBtn" id="{{ $category->id }}" data-url="{{ url('/quick-add-to-cart') }}" data-target="#addtocart" title="Add to cart">
                                                                    <i class="ti-bag"></i>
                                                                </button>
                                                                <a href="javascript:void(0)" title="Add to Wishlist" id="{{ $category->id }}" data-url="{{ url('/quick-add-to-wishlist') }}" class="quick-add-to-wishlist">
                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                </a>
                                                                <a href="{{ url('/') }}" data-toggle="modal" class="quick-view-btn" data-target="#quick-view" title="Quick View" id="{{ $category->id }}">
                                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                                </a>
                                                                <!-- <a href="" title="Compare">
                                                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- category products end -->
                                        </div>
                                        @else
                                        <div class="alert-danger p-3">There are no Products avialable in this Category.</div>
                                        @endif
                                    </div>

                                    <!-- pagination start -->
                                    @php($product = $categories->products)
                                        @if(isset($productFilter))
                                            @php( $product = $productFilter)
                                        @endif
                                    @if(count($product))
                                    <div class="product-pagination">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- pagination end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->