@extends('website.layouts.master')

@section('title', 'Membership Apply- '.env('APP_NAME'))

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
    <!-- Section: inner-header   -->
     {{-- route('membership.apply.store') --}}
    <x-breadcrumb slug="Membership Form" image="{{ asset('frontend') }}/images/bg/bg6.jpg"/>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
            <div class="border-1px p-25">
              <h4 class="text-theme-colored text-uppercase m-0">Make a Membership</h4>
              <div class="line-bottom mb-30"></div>
              <p>Please fill in the form below to apply for membership with North Bengal Foundation.</p>
              {{-- Success Message --}}
                @if(session('success'))
                  <div class="alert alert-success">
                    <i class="fa fa-check-circle"></i> {{ session('success') }}
                  </div>
                @endif

                {{-- Error Messages --}}
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <strong>Please fix the following errors:</strong>
                    <ul class="mt-10">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

              <form method="POST" action="{{ route('membership.apply.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                  <!-- Full Name -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="name" class="form-control" type="text" required placeholder="Full Name *">
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="email" class="form-control" type="email" required placeholder="Email Address *">
                    </div>
                  </div>                  

                  <!-- Father Name -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="f_name" class="form-control" type="text"  placeholder="Father Name">
                    </div>
                  </div>

                  <!-- Mother Name -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="m_name" class="form-control" type="text"  placeholder="Mother Name">
                    </div>
                  </div>

                  <!-- DOB -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="dob" class="form-control" type="date"  placeholder="Date of Birth">
                    </div>
                  </div>

                  <!-- NId  -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="nid" class="form-control" type="text"  placeholder="National ID / Birth Certificate No">
                    </div>
                  </div>
                  
                  <!-- Membership Type -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <select name="membership_type" class="form-control" required>
                        <option value="">-- Select Gender --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  
                  <!-- Membership Type -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <select name="membership_type" id="membership_type" class="form-control" required>
                        <option value="">-- Select Membership Type --</option>
                        <option value="1">Executive Member</option>  <!-- executive -->
                        <option value="2">Lifetime Member</option>  <!-- lifetime -->
                        <option value="3">General Member</option>  <!-- general -->
                        <option value="4">Donor</option>  <!-- donor -->
                        <option value="5">Volunteer</option>  <!-- volunteer -->
                        <option value="6">Other</option>  <!-- other -->
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12" id="payment_section" style="display:none;">
                    <div class="form-group mb-15">
                      <label>Membership / Donation Amount ($)</label>
                      <input type="number" min="1" name="payment_amount" id="payment_amount" class="form-control"  placeholder="Enter amount">
                      <small id="payment_note" class="text-muted"></small>
                    </div>
                  </div>


                  <!-- Mobile -->
                  <div class="col-sm-12">
                    <div class="form-group mb-15">
                      <input name="mobile" class="form-control" type="text" required placeholder="Mobile Number *">
                    </div>
                  </div>

                  <!-- Designation -->
                  <!-- <div class="col-sm-12">
                    <div class="form-group mb-15">
                      <input name="designation" class="form-control" type="text" placeholder="Desired Designation (e.g. Volunteer, Coordinator)">
                    </div>
                  </div> -->

                  <!-- Occupation -->
                  <div class="col-sm-12">
                    <div class="form-group mb-15">
                      <input name="occupation" class="form-control" type="text" placeholder="Occupation">
                    </div>
                  </div>


                  <!-- Address -->
                  <div class="col-sm-12">
                    <div class="form-group mb-15">
                      <input name="address" class="form-control" type="text" placeholder="Full Address">
                    </div>
                  </div>
                  
                  <!-- Facebook Profile Link-->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="facebook" class="form-control" type="text"  placeholder="Facebook Profile Link">
                    </div>
                  </div>

                  <!-- Twitter Profile Link -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="twitter" class="form-control" type="text"  placeholder="Twittet Profile Link">
                    </div>
                  </div>

                  <!-- YouTube Profile Link -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="youtube" class="form-control" type="text"  placeholder="Instagram Profile Link">
                    </div>
                  </div>

                  <!-- Personal Website -->
                  <div class="col-sm-6">
                    <div class="form-group mb-15">
                      <input name="local" class="form-control" type="text"  placeholder="Personal Website">
                    </div>
                  </div>
                  
                  <!-- Short Bio -->
                  <div class="col-sm-12">
                    <div class="form-group mb-15">
                      <textarea name="short_bio" class="form-control" rows="4" placeholder="Why do you want to join us? / Short Bio"></textarea>
                    </div>
                  </div>
                
                <!-- Profile Image -->
                <div class="col-sm-12">
                  <div class="form-group mb-20">
                    <label>Profile Photo</label>
                    <input name="image" class="form-control" type="file">
                  </div>
                </div>

                <!-- Submit -->
                <div class="form-group mb-0 mt-20">
                  <button type="submit" class="btn btn-dark btn-theme-colored btn-lg">
                    <i class="fa fa-paper-plane"></i> Submit Application
                  </button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

<script>
$(document).ready(function () {

  function hidePayment() {
    $('#payment_section').hide();
    $('#payment_amount')
      .val('')
      .prop('readonly', false)
      .prop('required', false);
    $('#payment_note').text('');
  }

  $('#membership_type').on('change', function () {
    let type = $(this).val();

    hidePayment();

    if (type === '2') {
      $('#payment_section').show();
      $('#payment_amount')
        .val(200)
        .prop('readonly', true)
        .prop('required', true);
      $('#payment_note').text('Lifetime membership fee is fixed: $200');

    } else if (type === '3') {
      $('#payment_section').show();
      $('#payment_amount')
        .val(100)
        .prop('readonly', true)
        .prop('required', true);
      $('#payment_note').text('General membership fee is fixed: $100');

    } else if (type === '4') {
      $('#payment_section').show();
      $('#payment_amount')
        .val('')
        .prop('readonly', false)
        .prop('required', true);
      $('#payment_note').text('Please enter your donation amount');
    }
  });

  // On page load (safety)
  hidePayment();

});
</script>



@endsection

@push('scripts')

@endpush