@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assetlog/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assetlog/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assetlog/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assetlog/css/style.css')}}">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{asset('assetlog/images/bg_1.jpg')}}');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3> <strong>Hireath Villa</strong></h3>
            <p class="mb-4">Masukan email & password anda</p>
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group first">
                <label for="name">Nama</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="email">Email Adrees</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password-confirm">Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

              <input type="submit" value="Register" class="btn btn-block" style="background-color:rgb(201, 175, 126);">
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('assetlog/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assetlog/js/popper.min.js')}}"></script>
    <script src="{{asset('assetlog/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assetlog/js/main.js')}}"></script>
  </body>
</html>
@endsection
