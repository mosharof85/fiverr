<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Register') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div> -->
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <a href="{{url('/home')}}" class="close" ><span aria-hidden="true">Back</span></a>
                <!-- </button> -->
            </div>
            <div class="modal-body">
                <div class="row row-topbar">
                    <div class="col-md-2">
                        <img src="/images/cb2.png" style="height:50px;width:50px;align:center;display: block; margin-left: auto; margin-right: auto;">  
                    </div>
                    <div class="col">
                        <h3 style="text-align: center">Create Your Account</h3>
                        <p >Already a member? <button data-dismiss="modal" data-toggle="modal" data-target="#loginModal" class="btn btn-light" style="text-decoration: underline;">Log In</button></p>
                    </div>
                </div>
            <form id="registerModalForm"  >
                        @csrf
                        <input type="hidden" name="modal_type" value="SignUp"/>
                        <div class="form-row w-50">
                            <div class="form-group col-md-6">
                                <label for="name" class="col-form-label text-md-right">{{ __('First name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <span id="name_error"  class="d-none " role="alert">
                                        <strong></strong>
                                    </span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="lastname" class="col-form-label text-md-right">{{ __('Last name') }}</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                <span id="lastname_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span id="email_error"  class="d-none " role="alert">
                                <strong></strong>
                            </span>
                        </div>
                        <div class="form-row">
                                <label for="name" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <input id="phonenumber" type="number" class="form-control " name="phonenumber" value="{{ old('phonenumber') }}"  autocomplete="phonenumber" autofocus>
                        </div>
                        <div class="form-row w-50">
                            <div class="form-group col-md-6">
                                <label for="country" class=" col-form-label text-md-right">{{ __('Country') }}</label>

                                <!-- <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus> -->
                                <select id="country" name="country" data-default="AU" class="form-control countrypicker" ></select>

                                <span id="country_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city" class=" col-form-label text-md-right">{{ __('City') }}</label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                <span id="city_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                            
                        </div>

                        <div class="form-row w-50">
                            <div class="form-group col-md-6">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                <span id="password_error"  class="d-none " role="alert">
                                    <strong></strong>
                                </span>
                            </div>

                            <div class="form-group row-password-confirm">
                                <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SignUp') }}
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