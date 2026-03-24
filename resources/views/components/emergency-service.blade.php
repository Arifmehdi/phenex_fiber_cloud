    @props([
        'title' => null,
    ])

    <section class="divider parallax layer-overlay overlay-dark-9" data-stellar-background-ratio="0.2"  data-bg-img="{{ asset('frontend') }}/images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-white">{{ $title }}</h2>
              <h2 class="text-white">Just call at <span class="text-theme-colored">(+880) 1234 56789</span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
