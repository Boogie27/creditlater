


<!--section start-->
<section class="login-page section-big-py-space bg-light">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="theme-card">
                    <h3 class="text-center">Create account</h3>
                    @if($errors = $errors->all())
                    @foreach($errors as $error)
                        <div class="alert-danger p-2 mb-1 text-center">{{ $error}}</div>
                    @endforeach
                    @endif
                    <form action="{{ url('/register') }}" method="post" class="theme-form">
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="review">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                            </div>
                            <button type="submit"  class="btn btn-normal ml-1">Create Account</button>
                            @csrf
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <p >Have you already account? <a href="{{ url('/login') }}" class="txt-default">click</a> here to &nbsp;<a href="{{ url('/login') }}" class="txt-default">Login</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
