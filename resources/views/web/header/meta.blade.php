
<head>
    <title>Bigdeal - Multi-purpopse E-commerce Html Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="big-deal">
    <meta name="keywords" content="big-deal">
    <meta name="author" content="big-deal">
    <!-- csrf_token -->
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link rel="icon" href="http://themes.pixelstrap.com/bigdeal/assets/images/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://themes.pixelstrap.com/bigdeal/assets/images/favicon/favicon.ico" type="image/x-icon">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&amp;display=swap" rel="stylesheet">

    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/themify.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/slick-theme.css') }}">

    <!--Animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/animate.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/color7.css') }}" media="screen" id="color">

     <!-- Main Theme css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('web/css/main.css') }}" media="screen" id="color">

    <!-- latest jquery-->
    <script src="{{ asset('web/js/jquery-3.3.1.min.js') }}"></script>
</head>


<!-- paths to pages used in main-script.js -->
<div class="cart-url" id="cart_part" data-url="{{ url('/cart') }}"></div>    <!-- add to cart url -->
<div class="cart-url" id="get_cart_quantity" data-url="{{ url('/get-cart-quantity') }}"></div>     <!-- get cart quantity url -->
<div class="cart-url" id="get_cart_dropdown" data-url="{{ url('/get-cart-dropdown') }}"></div>     <!-- get cart dropdown url-->
<div class="wishlist-url" id="get_wishlist_items" data-url="{{ url('/wishlist') }}"></div>     <!-- get wishlist url-->
<div class="wishlist-url" id="get_wishlist_items_quantity" data-url="{{ url('/get-wishlist-quantity') }}"></div>     <!-- get wishlist url-->
<div class="wishlist-url" id="get_quick_wishlist_items" data-url="{{ url('/get-quick-wishlist-items') }}"></div>     <!-- get quick wishlist url-->