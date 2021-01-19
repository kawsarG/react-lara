<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <title>Fiber Portal</title>
</head>

<body>
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('frontend/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Login to <strong>Fiber Portal</strong></h3>
                    <p class="mb-4 text-red">Manage Your Fiber Anytime,Anywhere
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="email" class="form-control" placeholder="your-email@gmail.com"
                                   id="username" name="email" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group last mb-5">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Your Password" id="password"
                                   name="password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="submit" value="Log In" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="asset('frontend/js/jquery-3.3.1.min.js')"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
