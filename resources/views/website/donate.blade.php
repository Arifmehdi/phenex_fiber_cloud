@extends('website.layouts.master')

@section('title', 'Donate - '.env('APP_NAME'))

@section('meta')
<meta name="description" content="Learn about Hubli’s mission to transform Bangladesh’s food supply chain and eliminate food wastage with a smart, efficient national network.">
<meta name="keywords" content="Hubli, food hub, supply chain, food wastage, Bangladesh, agriculture">
<meta property="og:title" content="About Us - Hubli">
<meta property="og:description" content="Transforming Bangladesh’s food supply chain with smart logistics and technology.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')

@endpush

@section('content')

    <!-- Section: inner-header -->
    <x-breadcrumb slug="Donate" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>

    <!-- Section: DonetForm & Testimonials -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <h3 class="mt-0 line-bottom">Make a Donation<span class="font-weight-300"> Now!</span></h3>

                <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                <form id="popup_paypal_donate_form_onetime_recurring">
                  <div class="row">
                    <div class="col-md-12">
                      <img src="images/payment-card-logo-sm.png" alt="">
                      <div class="form-group mt-20 mb-20">
                        <label><strong>Payment Type</strong></label> <br>
                        <label class="radio-inline">
                          <input type="radio" checked="" value="one_time" name="payment_type"> 
                          One Time
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="recurring" name="payment_type"> 
                          Recurring
                        </label>
                      </div>
                    </div>

                    <div class="col-sm-12" id="donation_type_choice">
                      <div class="form-group mb-20">
                        <label><strong>Donation Type</strong></label>
                        <div class="radio mt-5">
                          <label class="radio-inline">
                            <input type="radio" value="D" name="t3" checked="">
                            Daily</label>
                          <label class="radio-inline">
                            <input type="radio" value="W" name="t3">
                            Weekly</label>
                          <label class="radio-inline">
                            <input type="radio" value="M" name="t3">
                            Monthly</label>
                          <label class="radio-inline">
                            <input type="radio" value="Y" name="t3">
                            Yearly</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <label><strong>I Want to Donate for</strong></label>
                        <select name="item_name" class="form-control">
                          <option value="Educate Children">Educate Children</option>
                          <option value="Child Camps">Child Camps</option>
                          <option value="Clean Water for Life">Clean Water for Life</option>
                          <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <label><strong>Currency</strong></label>
                        <select name="currency_code" class="form-control">
                          <option value="">Select Currency</option>
                          <option value="USD" selected="selected">USD - U.S. Dollars</option>
                          <option value="AUD">AUD - Australian Dollars</option>
                          <option value="BRL">BRL - Brazilian Reais</option>
                          <option value="GBP">GBP - British Pounds</option>
                          <option value="HKD">HKD - Hong Kong Dollars</option>
                          <option value="HUF">HUF - Hungarian Forints</option>
                          <option value="INR">INR - Indian Rupee</option>
                          <option value="ILS">ILS - Israeli New Shekels</option>
                          <option value="JPY">JPY - Japanese Yen</option>
                          <option value="MYR">MYR - Malaysian Ringgit</option>
                          <option value="MXN">MXN - Mexican Pesos</option>
                          <option value="TWD">TWD - New Taiwan Dollars</option>
                          <option value="NZD">NZD - New Zealand Dollars</option>
                          <option value="NOK">NOK - Norwegian Kroner</option>
                          <option value="PHP">PHP - Philippine Pesos</option>
                          <option value="PLN">PLN - Polish Zlotys</option>
                          <option value="RUB">RUB - Russian Rubles</option>
                          <option value="SGD">SGD - Singapore Dollars</option>
                          <option value="SEK">SEK - Swedish Kronor</option>
                          <option value="CHF">CHF - Swiss Francs</option>
                          <option value="THB">THB - Thai Baht</option>
                          <option value="TRY">TRY - Turkish Liras</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <label><strong>How much do you want to donate?</strong></label>
                        <div class="radio mt-5">
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="20">
                            $20</label>
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="50">
                            $50</label>
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="100">
                            $100</label>
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="200">
                            $200</label>
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="500">
                            $500</label>
                          <label class="radio-inline">
                            <input type="radio" name="amount" value="other">
                            Other Amount</label>
                        </div>
                        <div id="custom_other_amount">
                          <label><strong>Custom Amount:</strong></label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                      </div>
                    </div>
                  </div>
                </form>
                
                <!-- Script for Donation Form Custom Amount -->
                <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
                  $(document).ready(function(e) {
                    var $donation_form = $("#popup_paypal_donate_form_onetime_recurring");
                    //toggle custom amount
                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                    $custom_other_amount.hide();
                    $donation_form.find("[name='amount']").change(function() {
                        var $this = $(this);
                        if ($this.val() == 'other') {
                          $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                        }
                        else{
                          $custom_other_amount.children( ".input-group" ).remove();
                          $custom_other_amount.hide();
                        }
                    });

                    //toggle donation_type_choice
                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                    $donation_type_choice.hide();
                    $("input[name='payment_type']").change(function() {
                        if (this.value == 'recurring') {
                            $donation_type_choice.show();
                        }
                        else {
                            $donation_type_choice.hide();
                        }
                    });


                    // submit form on click
                    $donation_form.on('submit', function(e){
                        //$( "#popup_paypal_donate_form-onetime" ).submit();
                        var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                        var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                        var amount = $donation_form.find("[name='amount']:checked").val();
                        var t3 = $donation_form.find("input[name='t3']:checked").val();

                        if ( amount == 'other') {
                          amount = $donation_form.find("#input_other_amount").val();
                          console.log(amount);
                        }

                        // submit proper form now
                        if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                            var recurring_form = $('#popup_paypal_donate_form-recurring');

                            recurring_form.find("input[name='item_name']").val(item_name);
                            recurring_form.find("input[name='currency_code']").val(currency_code);
                            recurring_form.find("input[name='a3']").val(amount);
                            recurring_form.find("input[name='t3']").val(t3);

                            recurring_form.find("input[type='submit']").trigger('click');

                        } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                            var onetime_form = $('#popup_paypal_donate_form-onetime');

                            onetime_form.find("input[name='item_name']").val(item_name);
                            onetime_form.find("input[name='currency_code']").val(currency_code);
                            onetime_form.find("input[name='amount']").val(amount);

                            onetime_form.find("input[type='submit']").trigger('click');
                        }
                        return false;
                    });

                  });
                </script>

                <!-- Paypal Onetime Form -->
                <form id="popup_paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="accounts@thememascot.com">

                  <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                  <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                  <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                  <input type="hidden" name="no_shipping" value="1">
                  <input type="hidden" name="cn" value="Comments...">
                  <input type="hidden" name="tax" value="0">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="bn" value="PP-DonationsBF">
                  <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                  <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                  <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                  <input type="submit" name="submit">
                </form>
                
                <!-- Paypal Recurring Form -->
                <form id="popup_paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_xclick-subscriptions">
                  <input type="hidden" name="business" value="accounts@thememascot.com">

                  <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                  <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                  <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                  <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                  <input type="hidden" name="p3" value="1">
                  <input type="hidden" name="rm" value="2">
                  <input type="hidden" name="src" value="1">
                  <input type="hidden" name="sra" value="1">
                  <input type="hidden" name="no_shipping" value="0">
                  <input type="hidden" name="no_note" value="1">                     
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="bn" value="PP-DonationsBF">
                  <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                  <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                  <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                  <input type="submit" name="submit">
                </form>
                <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->


                
              
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <h3 class="mt-0 line-bottom">Testimonials</h3>
              <div class="testimonial style1 owl-carousel-1col owl-nav-top">

              
              @forelse($testimonials as $testimonial)  
                <div class="item">
                  <div class="comment bg-theme-colored">
                    <p>{{ strip_tags($testimonial->text_en) }}</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/user.png">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="author text-theme-colored">{{ $testimonial->name }}</h5>
                      <h6 class="title">{{ $testimonial->company }}</h6>
                    </div>
                  </div>
                </div>
              @empty
              <p>There no testimonials here</p>
              @endforelse

                {{--<div class="item">
                  <div class="comment bg-theme-colored">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/s1.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="author text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">cici inc.</h6>
                    </div>
                  </div>
                </div>
                                
                <div class="item">
                  <div class="comment bg-theme-colored">
                    <p>Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                  </div>
                  <div class="content mt-20">
                    <div class="thumb pull-right">
                      <img class="img-circle" alt="" src="{{ asset('frontend') }}/images/testimonials/s1.jpg">
                    </div>
                    <div class="patient-details text-right pull-right mr-20 mt-10">
                      <h5 class="author text-theme-colored">Jonathan Smith</h5>
                      <h6 class="title">cici inc.</h6>
                    </div>
                  </div>
                </div>--}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="divider parallax layer-overlay overlay-dark-7" data-bg-img="{{ asset('frontend') }}/images/bg/bg13.jpg" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2 class="text-white">Featured project to built a School</h2>
              <p class="text-white">We are charity/ non-profit/ fundraising/ NGO organizations. Our charity activities are taken place around the 
              world,let contribute to them with us by your hand to be a better life</p>
              <div class="causes">
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="85" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
              </div>
            <div class="row mt-20">
              <div class="col-xs-6 col-md-6 text-left text-white">
                Raised: $2,900
              </div>
              <div class="col-xs-6 col-md-6 text-right text-white">
                Goal: $3,600
              </div>
            </div>
            <a class="btn btn-default btn-circled btn-transparent pl-20 pr-20 bg-white text-black mt-30" href="page-donate.html">Donate Now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section id="causes" class="bg-silver-light">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600">Causes</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati! <br>ipsum dolor sit Rem autem voluptatem obcaecati</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">

        @forelse($causes as $cause)
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-white maxwidth500 mb-30">
              <a href="{{ route('cause.details', $cause->slug) }}">
              <div class="thumb">
                  @if($cause->image)
                    <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="img-fullwidth">
                  @else
                    <img src="{{ asset('frontend') }}/images/project/no-image.png" alt="No Image" class="img-fullwidth">
                  @endif
                  
                <div class="overlay-donate-now">
                  <a href="{{ route('donate') }}" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Donate <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                </div>
              </div>
              </a>
              <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                <h5 class="font-weight-600 font-16"><a href="page-single-cause.html">Education for Childreen</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit Praesent</p>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div data-percent="84" class="progress-bar"><span class="percent">0</span></div>
                  </div>
                </div>
                <ul class="list-inline project-conditions mt-20 text-center m-0 p-10">
                  <li class="target-fund text-theme-colored"><strong>$120,000</strong>Target</li>
                  <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                  <li class="raised text-theme-colored"><strong>$65,000</strong>Raised</li>
                </ul>
              </div>
            </div>
          </div>
        @empty
        <div class="col-12">
          <p>There is no causes </p>
        </div>
        @endforelse 
        </div>
      </div>
    </section>
@endsection

@push('scripts')

@endpush