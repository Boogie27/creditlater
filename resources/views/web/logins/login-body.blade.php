

<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-8 offset-xl-4 offset-lg-3 offset-md-2">
                <div class="theme-card">
                    <h3 class="text-center">Login</h3>
                    @if($errors = $errors->all())
                    @foreach($errors as $error)
                        <div class="alert-danger p-2 mb-1 text-center">{{ $error}}</div>
                    @endforeach
                    @endif
                    <form action="{{ url('/login') }}" method="post" class="theme-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" value="{{ old('password') }}" required>
                        </div>
                        <button  type="submit" class="btn btn-normal">login</button>
                        <a class="float-right txt-default mt-2" href="{{ url('/forgot-password') }}" id="fgpwd">Forgot your password?</a>
                        @csrf
                    </form>
                    <p class="mt-3">Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                    <a href="{{ url('/register') }}" class="txt-default pt-3 d-block">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

