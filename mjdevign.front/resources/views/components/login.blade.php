<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
        </div>
            <img src="/images/cb2.png" class="content-logo">
            <h3 style="text-align:center" class="f-montserratMedium2">Log In</h3>
            <p class="border-bottom" style="text-align:center">Not a member? <button data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" class="btn btn-light" style="text-decoration: underline;">Sign Up</button></p>
            <div class="facebook-login">
                    <a href="{{ url('/auth/redirect/facebook') }}">
                    <img src="{{ url('/images/loginfb.png') }}" alt="fblog.png">
                    </a>
            </div>
            <p class="modal-or">
                <span class="one"></span>
                <span>or</span>
                <span class="two"></span>
            </p>
            <div class="email-login">
                <a data-dismiss="modal" data-toggle="modal" data-target="#exampleModal" >
                    <img src="{{ url('/images/loginEmail.png') }}" alt="fblog.png">
                </a>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
            <!-- </button> -->
        </div>
            <br>
            <img src="/images/cb2.png" class="content-logo">
            <h3 style="text-align:center" class="f-montserratMedium2">Sign Up</h3>
            <p class="border-bottom" style="text-align:center">Already a member? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="btn btn-light" style="text-decoration: underline;">Log In</button></p>

            <div class="facebook-login">

                    <a href="{{ url('/auth/redirect/facebook') }}">
                    <img src="{{ url('/images/signupfb.png') }}" alt="fblog.png">
                    </a>
            </div>
            <p class="modal-or">
                <span class="one"></span>
                <span>or</span>
                <span class="two"></span>
            </p>
            <div class="email-login">
                <a type="button" class="btn " data-dismiss="modal" data-toggle="modal" data-target="#registerModal" >
                    <img src="{{ url('/images/signupemail.png') }}" alt="fblog.png">
                </a>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
                <!-- </button> -->
        </div>
        <div class="modal-body">
            <img src="/images/cb2.png" class="content-logo">
            <h3 style="text-align:center" class="f-montserratMedium2">Log In</h3>
            <p style="text-align:center" class="border-bottom">Not a member? <button data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" class="btn btn-light" style="text-decoration: underline;">Sign Up</button></p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div>
                        <input id="password" type="password" class="form-control @error('password:') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div></div>
                    <div>
                        <div class="form-check" style="display: flex; align-items: center">
                            <input style="width: auto" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">


                    @if (Route::has('password.request'))
                        <a class="btn btn-link forget-pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="form-group row mb-0">
                    <div></div>
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>

            </form>

        </div>
        <p class="modal-or">
            <span class="one"></span>
            <span>or log in with</span>
            <span class="two"></span>
        </p>

        <div class="facebook-login">

            <a href="{{ url('/auth/redirect/facebook') }}">
                <img src="{{ url('/images/facebook-login.png') }}" alt="fblog.png">
                <span>Facebook</span>
            </a>
        </div>

    </div>
</div>
</div>
<script src="{{ asset ( 'main/js/jquery-3.5.1.js' ) }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
@if($errors->has('email') || $errors->has('password'))
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal("show");
        });
    </script>
@endif
