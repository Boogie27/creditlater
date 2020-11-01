<!-- middle navigation -->
<div class="layout-header1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-menu-block">
                    <div class="menu-left">
                        <div class="sm-nav-block">
                            <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                            <ul class="nav-slide">
                                <li>
                                    <div class="nav-sm-back">
                                        back <i class="fa fa-angle-right pl-2"></i>
                                    </div>
                                </li>
                                @php($counter = 0)
                                @foreach($sideCategories as $key=>$category)
                                @php($counter++)
                                @if($counter <= 12)
                                <li><a href="{{ url('category/'.$category->category_name) }}">{{$category->category_name}}</a></li>
                                @endif
                                @endforeach
                                <li class="mor-slide-open">
                                    <ul>
                                    @php($counter = 0)
                                    @foreach($sideCategories as $key=>$category)
                                    @php($counter++)
                                    @if($counter > 12 && $counter == $key+1)
                                    <li><a href="{{ url('category/'.$category->category_name) }}">{{$category->category_name}}</a></li>
                                    @endif
                                    @endforeach
                                    </ul>
                                </li>
                                <li> <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a></li>
                            </ul>
                        </div>
                        <div class="brand-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('web/images/layout-1/logo/logo.png') }}" class="img-fluid  " alt="logo-header">
                            </a>
                        </div>
                    </div>
                    <div class="menu-right">
                        <div class="toggle-block">
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                    </li>
                                    <!--HOME-->
                                    <li><a href="{{ url('/') }}">Home</a> </li>
                                    <li><a href="{{ url('/products') }}">Products</a> </li>
                                    <li><a href="{{ url('/wishlist') }}">wishlist</a> </li>
                                    <li><a href="{{ url('/cart') }}">Cart</a> </li>
                                    @if(Session::has('user'))
                                    <li><a href="{{ url('/logout') }}">logout</a> </li>
                                    @else
                                    <li><a href="{{ url('/login') }}">login</a> </li>
                                    <li><a href="{{ url('/register') }}">register</a> </li>
                                    @endif
                                    <!--HOME-END-->

                                    <!--SHOP-->
                                    
                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="mobile-user onhover-dropdown" onclick="openAccount()"><a href="#"><i class="fa fa-user-o"></i></a>
                                    </li>
                                    <li class="mobile-wishlist" onclick="openWishlist()">
                                        <a href="#">
                                            <i class="fa fa-heart-o"></i>
                                            <div class="cart-item"><div> <span class="get-wishlist-qty" style="color: orangered;">{{ wishlist_quantity() }} item</span><span>wishlist</span></div></div></a></li>
                                    <li class="mobile-search"><a href="#"><i class="fa fa-search"></i></a>
                                        <div class ="search-overlay">
                                            <div>
                                                <span class="close-mobile-search">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="fa fa-settings"></i></a>
                                    </li>
                                </ul>
                                <div class="cart-block mobile-cart cart-hover-div" onclick="openCart()">
                                    <a href="#"><span class="cart-product" id="shopping_cart_quantity">{{ Session::has('cart')? Session::get('cart')->_totalQty : '0' }}</span><i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- middle navigation end -->