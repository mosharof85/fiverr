<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
{{--            <div class="modal-header">--}}
{{--                <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>--}}
{{--            </div>--}}
            <div class="modal-body">
                <div class="row row-topbar">
                    <div class="col1">
                        <img src="/images/cb2.png">
                    </div>
                    <div class="col2">
                        <h3 style="text-align: center; font-size: 22px" class="f-montserratMedium2">Create Your Account</h3>
                        <p>Let's get started!</p>
                    </div>
                </div>
                <p class="already-user">Already a member? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="btn btn-light" style="text-decoration: underline;">Log In</button></p>
                <form id="registerModalForm"  >
                        @csrf
                        <input type="hidden" name="modal_type" value="SignUp"/>
                        <div class="w-50">
                            <div>
                                <label for="name" class="col-form-label text-md-right">{{ __('First name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <span id="name_error"  class="d-none " role="alert">
                                        <strong></strong>
                                    </span>
                            </div>

                            <div>
                                <label for="lastname" class="col-form-label text-md-right">{{ __('Last name') }}</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                <span id="lastname_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span id="email_error"  class="d-none " role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div>
                                <label for="name" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <input id="phonenumber" type="number" class="form-control " name="phonenumber" value="{{ old('phonenumber') }}"  autocomplete="phonenumber" autofocus>
                        </div>
                        <div class="w-50">
                            <div>
                                <label for="country" class=" col-form-label text-md-right">{{ __('Country') }}</label>

                                <!-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus> -->
                                <select id="country" name="country" data-default="AU" class="form-control countrypicker" ></select>

                                <span id="country_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            <div>
                                <label for="city" class=" col-form-label text-md-right">{{ __('City') }}</label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                <span id="city_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            
                        </div>

                        <div class="fw-50">
                            <div>
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <span id="password_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="row-password-confirm">
                                <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row-submit">
                            <div>
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('SignUp') }}--}}
{{--                                </button>--}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Account') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset ( 'main/js/jquery-3.5.1.js' ) }}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $( "#registerModal" ).focus(function() {

        $('#registerModalForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        // alert(response);
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => {window.location.assign("{{ route('home') }}")},//window.location.assign("{ route('home') }}"),
            error: (res) => {
                if(res.status === 422) {
                    let errors = res.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key).addClass("is-invalid");
                        $("#" + key + "_error").children("strong").text(errors[key][0]);
                        $("#" + key + "_error").removeClass( "d-none" );
                    });
                } else {
                    console.log(res);
                    //window.location.reload();
                }
            }
        })
        return false;
    });
});
});
</script>