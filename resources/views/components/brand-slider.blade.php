    @php
        use App\Models\Company;
        $companies = Company::where('active', true)->limit(12)->get();
    @endphp
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              @forelse($companies as $company)
              <div class="item">
                  @if($company->img)
                      <a href="#"><img src="{{ asset('storage/' . $company->img) }}" alt="{{ $company->name }}"></a>
                  @else
                      <a href="#"><img src="{{ asset('frontend') }}/images/clients/no-image.png" alt="{{ $company->name }}"></a>
                  @endif
              </div>
              @empty 
              <p>There is no company logo </p>
              @endforelse

              {{-- <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="{{ asset('frontend') }}/images/clients/w6.png" alt=""></a></div>--}}
            </div>
          </div>
        </div>
      </div>
    </section>