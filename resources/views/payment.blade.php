{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<form action="{{ route('payment.post') }}" method="POST" class="require-validation" data-cc-on-file="false"
    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
    @csrf
    <div class="row">
        <div class="col-md-6 col-md-offser-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading">
                    <div class="row">
                        <h3> Card Payment </h3>
                    </div>
                </div>

                @foreach ($courses as $course)
                  
                @endforeach
                <div class="panel-body">
                    <br>
                    <div class="form-row row">
                        <div class="col-xs-12 col-md-6 form-group required">
                            <label for="" class="control-label">Name on Card</label>
                            <input autocomplete="off" class="form-control card-number" name="cardholder" required size="4" type="text">
                        </div>
                        <div class="col-xs-12 col-md-4 form-group expiration required">
                            <label class="'control-label">Card Number</label>
                            <input autocomplete="off" class="form-control card-number"  name="cardnumber" size="20" type="text" required>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-xs-12 col-md-4 form-group cvc required">
                            <label class="'control-label">CVC</label>
                            <input autocomplete="off" name = "cvc" class="form-control card-cvc" placeholder="ex . 311" size="4" required
                                type="text">
                        </div>
                        <div class="col-xs-12 col-md-4 form-group expiration required">
                            <label class="'control-label">Expiration Month</label>
                            <input autocomplete="off" name="expirationmonth" class="form-control card-cvc" placeholder="MM" size="2" required
                                type="text">
                        </div>
                        <div class="col-xs-12 col-md-4 form-group expiration required">
                            <label class="'control-label">Expiration Year</label>
                            <input autocomplete="off" name="expirationyear" class="form-control card-cvc" placeholder="YYYY" size="4" required
                                type="text">
                        </div>
                    </div>
                    <div class="form-row row">
                        {{-- <div class="col-md-12 error form-group hide">
            <div class="alert-danger">
            Please correct the errors and try again.
            </div>
          </div> --}}
                    {{-- </div>
                    <div class="form-row row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

{{-- </form>
<script type="text/javascript" src="https://js.strpe.com/v2"></script>
<script type="text/javascript">
    $(function() {
                var $form = $(".require-validation");
                $('form.require-validation').bind('submit, function(e)' {
                        var $form = $(".require-validation"),
                            inputSelector = ['input[type=email]', 'input[type=password', 'input[type=text]',
                                'input[type=file]', 'textarea'
                            ].join(', '),
                            $inputs = $form.find('.require').find(inputSelector),
                            $errorMessage = $form.find('div.error'),
                            valid = true;
                        $errorMessage.addClass('hide');
                        $(.has - error).removeClass('has-error');
                        $inputs.each(function(i, el) {
                            var $input = $(el);
                            if ($input.val() === '') {
                                $input.parent().addClass('has-error');
                                $errorMessage.removeClass('hide');
                                e.preventDefault();
                            }
                        });
                        if (!$form.data('cc-on-file')) {
                            e.preventDefault();
                            Stripe.setPublishableKey($form.data('stripe.publishable-key'));
                            Stripe.createToken({
                                number: $('.card-number').val(),
                                cvc: $('.card-cvc').val(),
                                exp_month: $(' .card-expiry-month').val(),
                                exp_year: $(' .$card-expiry-year').val(),
                            }, stripeResponseHandler);
                        }
                    }
                });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty;
                    $form.append("<input type="
                        hidden " name="
                        stripeToken " vlaue='" + token + "'/>")
                    $form.get(0).submit();
                }
            }
</script> --}} 
