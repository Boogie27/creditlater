<!-- My account bar start-->
<div id="myAccount" class="add_to_cart right account-bar">
    <a href="javascript:void(0)" class="overlay" onclick="closeAccount()"></a>
    <div class="cart-inner">
        <div class="cart_top">
            <h3>my account</h3>
            <div class="close-cart">
                <a href="javascript:void(0)" onclick="closeAccount()">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="error-container p-3">
            <div class="alert-danger p-2 text-center side-login-error"></div>
        </div>
        <form action="{{ url('/login-ajax') }}" method="post" id="ajax_login_form" class="theme-form">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="review">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <a href="{{ url('/login-ajax') }}" id="side_login_btn" class="btn btn-rounded btn-block ">Login</a>
            </div>
            <div>
                <h5 class="forget-class"><a href="{{ url('forget-password') }}" class="d-block">forget password?</a></h5>
                <h6 class="forget-class"><a href="{{ url('/register') }}" class="d-block">new to store? Signup now</a></h6>
            </div>
        </form>
    </div>
</div>
<!-- Add to account bar end-->