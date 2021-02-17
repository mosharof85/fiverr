<div class="card-body">
    <div class="container" style="display: block !important;">
        <h4>
            Pay through secure card payment
        </h4>
        <div class="row">
            <div class="col-md-7">
                <div class="debit-card" email="{{(Auth::user()) != null ? Auth::user()->email : null}}" api-key-data = "{{env('STRIPE_KEY')}}", _token = "{{csrf_token()}}">
                    <div class="input-group input-group-sm mb-3">
                        <!-- <input type="email" class="form-control" id="email" placeholder="username@domain.com" aria-label="Small" aria-describedby="inputGroup-sizing-sm"> -->
                        <input type="hidden" name="transaction_id" id ="transaction_id" value="">
                        <input type="hidden" name="receipt_url" id ="receipt_url" value="">
                        <input type="hidden" name="paymentType" value="Stripe">
                    </div>
                    <div id="card-element">
                        <!-- Elements will create input elements here -->
                    </div>

                    <div id="card-errors" style="color:#000;" role="alert">
                        <!-- We'll put the error messages in this element -->
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</div>
