<footer id="footer" class="m-0">
  <div class="container">
    <div class="row pt-5 pb-4">
    <div class="col-md-4 col-lg-3 mb-2">
    <!-- Location -->
    <h4 class="mb-4">Location</h4>
    <p>
        {{ $ws->contact_address }}
    </p>

    <!-- Support -->
    <div class="mt-4">
          <h4 class="fw-semibold text-white mb-3 fs-5">Conntact US</h4>
          <ul class="list-unstyled">
              <li>
                <a href="" class="w3--text-light-gray text-decoration-none">For any query/help , Please send us mail {{ $ws->contact_email }}</a>
                  {{--<a href="{{ route('websiteCompliance') }}" class="w3--text-light-gray text-decoration-none">
                      Website Compliance
                  </a>--}}
              </li>
          </ul>
      </div>
  </div>
      <div class="col-md-4 col-lg-3">
        <h4 class="mb-4">Opening Hours</h4>
          <div class="info custom-info " style="color: #95989c">
            Sunday-Thursday :<br> 10:00 AM to 10:00 PM
          </div>
          <div class="info custom-info " style="color: #95989c">
            Friday-Saturday :<br> 10:00 AM to 04:00 PM
          </div>
        {{-- <div class="info custom-info">
          <span>Friday</span>
          <span>9:00 to 16:00</span>
        </div>
        <div class="info custom-info">
          <span>Saturday</span>
          <span>9:00 to 16:00</span>
        </div> --}}
      </div>
      <div class="col-md-4 col-lg-3">
        <div class="contact-details">
          <h4 class="mb-4">Emergency Cases</h4>
          <a class="text-decoration-none" href="tel:{{$ws->contact_mobile}}">
            <span><b>{{$ws->contact_mobile}}</b></span>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <h4 class="mb-4">Legal</h4>
        <ul class="list-unstyled">
          <li><a href="{{ url('page/about-us') }}" class="text-decoration-none">About Us</a></li>
          <li><a href="{{ route('terms') }}" class="text-decoration-none">Terms and Conditions</a></li>
          <li><a href="{{ route('return-policy') }}" class="text-decoration-none">Return and Refund Policy</a></li>
          <li><a href="{{ route('privacy-policy') }}" class="text-decoration-none">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-lg-4">
        <h4 class="mb-4">Payment Methods</h4>
        <img src="{{ asset('img/payment.webp') }}" alt="Payment methods" width="60%" class="img-fluid">
      </div>
      <div class="col-lg-2 text-md-center text-lg-start ms-lg-auto">
        <h4 class="mb-4">Social Media</h4>
        <ul class="social-icons">
          <li class="social-icons-facebook">
            <a href="{{ $ws->fb_url }}" target="_blank" title="Facebook">
              <img src="{{ asset('frontend/assets/img/icons/fb.webp') }}" alt="Facebook">
            </a>
          </li>
          <li class="social-icons-youtube">
            <a href="{{ $ws->youtube_url }}" target="_blank" title="YouTube">
              <img src="{{ asset('frontend/assets/img/icons/yt.webp') }}" alt="YouTube">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright pt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center m-0">
          <p class="text-light-gray">
              © Copyright {{date('Y')}}. All Rights Reserved. Developed By : <a style="color:white" href="javascript:void(0)">Phenex Soft</a>
          </p>
          
        </div>
      </div>
    </div>
  </div>
</footer>