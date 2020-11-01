<!-- bottom navigation start -->
<div class="category-header">
    <div class="custom-container">
        <div class="row">
            <div class="col">
                <div class="navbar-menu">
                    <div class="category-left">
                        <div class=" nav-block">
                            <div class="nav-left">
                                <nav class="navbar" data-toggle="{{ Request::path() != '/' ? 'collapse' : '' }}" data-target="#navbarToggleExternalContent">
                                    <button class="navbar-toggler" type="button">
                                        <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                    </button>
                                    <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5>
                                </nav>
                                <div class="collapse nav-desk {{ Request::path() == '/' ? 'show' : '' }}" id="navbarToggleExternalContent">
                                    <ul class="nav-cat title-font ">
                                        @php($counter = 0)
                                        @foreach($sideCategories as $key=>$category)
                                        @php($counter++)
                                        @if($counter <= 12)
                                        <li> <a href="{{ url('category/'.$category->category_name) }}"><img src="{{ asset($category->category_image) }}" alt="{{$category->name}}"></a> 
                                        <a href="{{ url('category/'.$category->category_name) }}">{{$category->category_name}}</a></li>
                                        @endif
                                        @endforeach
                                        <li class="mor-slide-open">
                                            <ul>
                                            @php($counter = 0)
                                            @foreach($sideCategories as $key=>$category)
                                            @php($counter++)
                                            @if($counter > 12 && $counter == $key+1)
                                            <li> <a href="{{ url('category/'.$category->category_name) }}"><img src="{{ asset($category->category_image) }}" alt="{{$category->image}}"></a> 
                                            <a href="{{ url('category/'.$category->category_name) }}">{{$category->category_name}}</a></li>
                                            @endif
                                            @endforeach
                                            </ul>
                                        </li>
                                        <li> <a class="mor-slide-click">mor category <i class="fa fa-angle-down pro-down"></i><i class="fa fa-angle-up pro-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="input-block">
                            <div class="input-box">
                                <form action="{{ url('products') }}" method="post" class="big-deal-form">
                                    <div class="input-group ">
                                        <input type="text" class="form-control" name="product_search" placeholder="Search a Product" >
                                        <div class="input-group-prepend">
                                           <button type="submit" class="search_btn"><span class="search"><i class="fa fa-search"></i></span></button>
                                            @csrf
                                            
                                        </div>
                                        <div class="input-group-prepend">
                                            <!-- <select>
                                                <option>All Category</option>
                                                <option>indurstrial</option>
                                                <option>sports</option>
                                            </select> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="category-right">
                        <div class="contact-block">
                            <div>
                                <i class="fa fa-volume-control-phone"></i>
                                <span>call us<span>123-456-76890</span></span>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div  class="gift-block" data-toggle="dropdown" >
                                <div class="grif-icon">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="gift-offer">
                                    <p>gift box</p>
                                    <span>Festivel Offer</span>
                                </div>
                            </div>
                            <div class="dropdown-menu gift-dropdown">
                                <div class="media">
                                    <div  class="mr-3">
                                        <img src="{{ asset('web/images/icon/1.png') }}" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Billion Days</h5>
                                        <p><img src="{{ asset('web/images/icon/currency.png') }}" class="cash" alt="gift-block"> Flat Rs. 270 Rewards</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div  class="mr-3">
                                        <img src="{{ asset('web/images/icon/2.png') }}" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Fashion Discount</h5>
                                        <p><img src="{{ asset('web/images/icon/fire.png') }}"  class="fire" alt="gift-block">Extra 10% off (upto Rs. 10,000*) </p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div  class="mr-3">
                                        <img src="{{ asset('web/images/icon/3.png') }}" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">75% off Store</h5>
                                        <p>No coupon code is required.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div  class="mr-3">
                                        <img src="{{ asset('web/images/icon/6.png') }}" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Upto 50% off</h5>
                                        <p>Buy popular phones under Rs.20.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div  class="mr-3">
                                        <img src="{{ asset('web/images/icon/5.png') }}" alt="Generic placeholder image">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Beauty store</h5>
                                        <p><img src="{{ asset('web/images/icon/currency.png') }}" class="cash" alt="curancy"> Flat Rs. 270 Rewards</p>
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
<!-- bottom navigation end -->