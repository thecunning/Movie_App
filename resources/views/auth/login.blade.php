@extends('layouts.app')

@section('content')
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.0/firebase-analytics.js";
  import { getAuth } from 'https://www.gstatic.com/firebasejs/10.7.0/firebase-auth.js'
  import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.7.0/firebase-firestore.js'
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBpubEAgVCMxLkxNV8TDU3JI6Bxcn3UNkk",
    authDomain: "movie-app-969fb.firebaseapp.com",
    databaseURL: "https://movie-app-969fb-default-rtdb.firebaseio.com",
    projectId: "movie-app-969fb",
    storageBucket: "movie-app-969fb.appspot.com",
    messagingSenderId: "835355352214",
    appId: "1:835355352214:web:b3bc16a82564b86ec936b7",
    measurementId: "G-2MVT6S38Y8"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
<meta name="google-signin-client_id" content="187501478-algg9fg0vmfpv0av0bui8prc4b2n1v3v.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <body>
  <!-- Insert this script at the bottom of the HTML, but before you use any Firebase services -->
  
    <script type="text/javascript" src="{{ url('public/js/facebook.js') }}"></script>

</body>

<script src="https://accounts.google.com/gsi/client" async></script>

<div class="container-fluid">
    <div class="row ">
        
        <div class=" col-md-6 wrap d-md-flex img_block" style='margin-left:200px; margin-top:100px'>
        <div class="cover  ">
            <img src="{{ url('img/a.jpg') }}" alt="rien" srcset="" class='img_login' height='375px' width='421px'>
        </div>
            <div class="card col-md-8">
               

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="  mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class=" col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder='E-mail'>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <label for="password" class="col-md-4  text-md-start">{{ __('Password') }}</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" mb-3">
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                    
                                </div>
                                @if (Route::has('password.request'))
                                    <a style='text-decoration:none;' href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class=" mb-0">
                            <div class="col-md-10 ">
                                <button type="submit" class="form-control btn btn-primary px-3">
                                    {{ __('Login') }}
                                </button>
                                <i class="fa fa-facebook-official">Facebook Log in</i>
                                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                                <p>Not a member ? <a style='text-decoration:none;' href="{{ route('register') }}">Sign Up</a></p>
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
