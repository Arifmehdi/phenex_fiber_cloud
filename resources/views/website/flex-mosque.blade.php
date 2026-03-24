@extends('website.layouts.master')

@section('title', 'Mosque - '. env('APP_NAME') )

@section('meta')
<meta name="description"
  content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection
@section('content')

<style>
  .mosque-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    background: #fff;
    height: 100%;
    min-height: 520px; 
    display: flex;
    flex-direction: column;
    position: relative;
}

.mosque-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #2ecc71, #27ae60);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.mosque-card:hover::before {
    transform: scaleX(1);
}

.mosque-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

.mosque-thumb {
    height: 240px;
    overflow: hidden;
    position: relative;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.mosque-thumb::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 60px;
    background: linear-gradient(to top, rgba(0,0,0,0.3), transparent);
    pointer-events: none;
}

.mosque-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.mosque-card:hover .mosque-thumb img {
    transform: scale(1.08);
}

.mosque-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    color: #27ae60;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    z-index: 1;
}

.card{
  padding-bottom: 0 !important;
}
.card-body {
    padding: 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.card-body .card-title {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 16px;
    color: #2c3e50;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.info-group {
    flex: 1;
}

.card-body .card-text {
    color: #5a6c7d;
    line-height: 1.7;
    margin-bottom: 12px;
    font-size: 0.9rem;
    display: flex;
    align-items: start;
}

.card-body .card-text i {
    margin-right: 10px;
    color: #27ae60;
    width: 16px;
    font-size: 0.95rem;
    margin-top: 3px;
    flex-shrink: 0;
}

.card-body .card-text strong {
    color: #34495e;
    margin-right: 4px;
}

.people-row {
    margin: 0 -5px;
}

.people-row > div {
    padding: 0 5px;
}

.people-row .card-text {
    font-size: 0.85rem;
}

.location-text {
    font-size: 0.85rem;
    color: #95a5a6;
    margin-top: 16px;
    padding-top: 16px;
    border-top: 2px solid #ecf0f1;
    display: flex;
    align-items: center;
    line-height: 1.5;
}


.location-text i {
    color: #e74c3c;
    margin-right: 8px;
    font-size: 1rem;
}


/* .location-text::before {
    content: '\f3c5';
    font-family: 'FontAwesome';
    margin-right: 8px;
    color: #e74c3c;
    font-size: 1rem;
} */

.filter-section {
    background: #fff;
    padding: 24px;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
    margin-bottom: 40px;
}

.filter-section .form-control {
    height: 45px;
    border: 2px solid #e8ecef;
    border-radius: 8px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.filter-section .form-control:focus {
    border-color: #27ae60;
    box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.1);
}

.btn-theme-colored {
    height: 45px;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.3px;
    transition: all 0.3s ease;
    border: none;
}

.btn-theme-colored:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
}

.no-results {
    text-align: center;
    padding: 60px 20px;
    color: #95a5a6;
}

.no-results i {
    font-size: 4rem;
    margin-bottom: 20px;
    color: #bdc3c7;
}

@media (max-width: 768px) {
    .mosque-card {
        margin-bottom: 24px;
    }
    
    .filter-section .col-md-2 {
        margin-bottom: 12px;
    }
    
    .card-body .card-title {
        font-size: 1.2rem;
    }
}
</style>

<!-- Section: inner-header -->
    <x-breadcrumb slug="Mosque" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>


<section>
  <div class="container">
    <div class="filter-section">
      <form method="GET" action="{{ url()->current() }}">
        <div class="row">
          <div class="col-md-2">
            <select name="division_id" id="division" class="form-control">
              <option value="">-- Select Division --</option>
              @foreach($divisions as $div)
                <option value="{{ $div->id }}" {{ request('division_id') == $div->id ? 'selected' : '' }}>
                  {{ $div->bn_name }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-2">
            <select name="district_id" id="district" class="form-control">
              <option value="">-- Select District --</option>
            </select>
          </div>

          <div class="col-md-2">
            <select name="upazila_id" id="upazila" class="form-control">
              <option value="">-- Select Upazila --</option>
            </select>
          </div>

          <div class="col-md-2">
            <select name="union_id" id="union" class="form-control">
              <option value="">-- Select Union --</option>
            </select>
          </div>

          <div class="col-md-2">
            <select name="village_id" id="village" class="form-control">
              <option value="">-- Select Village --</option>
            </select>
          </div>

          <div class="col-md-2">
            <button class="btn btn-theme-colored btn-block">Search</button>
          </div>
        </div>
      </form>
    </div>

    <div class="row multi-row-clearfix">
      <div class="blog-posts">

        @forelse($mosques as $mosque)
        <div class="col-md-4">
            <div class="card mosque-card " style="margin-bottom: 1.5rem">
                <div class="mosque-thumb">
                    {{--@if($mosque->foundation_year)
                    <div class="mosque-badge">
                        <i class="fa fa-calendar"></i> {{ $mosque->foundation_year }}
                    </div>
                    @endif--}}
                    <img src="{{ $mosque->image ? asset('storage/' . $mosque->image) : asset('frontend/assets/images/no-image.png') }}"
                        alt="{{ $mosque->name }}" class="img-responsive img-fullwidth">
                </div>
                <div class="card-body">
                    <h4 class="card-title text-theme-colored">{{ $mosque->name }}</h4>
                    
                    <div class="info-group">
                        {{--<p class="card-text">
                            <i class="fa fa-map-marker"></i>
                            <span>{{ $mosque->address }}</span>
                        </p>--}}
                        
                        @if ($mosque->imam_name || $mosque->secretary_name)
                            <div class="row people-row">
                                @if ($mosque->imam_name)
                                <div class="col-xs-6">
                                    <p class="card-text">
                                        <i class="fa fa-user"></i>
                                        <span><strong>ইমাম:</strong> {{ $mosque->imam_name }}</span>
                                    </p>
                                </div>
                                @endif
                                
                                @if ($mosque->secretary_name)
                                <div class="col-xs-6">
                                    <p class="card-text">
                                        <i class="fa fa-user"></i>
                                        <span><strong>সভাপতি:</strong> {{ $mosque->secretary_name }}</span>
                                    </p>
                                </div>
                                @endif
                            </div>
                        @endif

<div>
    @if ($mosque->foundation_year)
        <p class="card-text mb-1">
            <i class="fa fa-calendar"></i>
            <strong>স্থাপিত:</strong> {{ $mosque->foundation_year }}
        </p>
    @endif

    @if ($mosque->reg_number)
        <p class="card-text mb-0">
            <i class="fa fa-certificate"></i>
            <strong>নিবন্ধন:</strong> {{ $mosque->reg_number }}
        </p>
    @endif
</div>


                    </div>
                    
                    <p class="location-text">
                        <i class="fa fa-map-marker"></i>
                        {{ $mosque->village->bn_name ?? '' }}{{ $mosque->village && $mosque->union ? ', ' : '' }}
                        {{ $mosque->union->bn_name ?? '' }}{{ $mosque->union && $mosque->upazila ? ', ' : '' }}
                        {{ $mosque->upazila->bn_name ?? '' }}{{ $mosque->upazila && $mosque->district ? ', ' : '' }}
                        {{ $mosque->district->bn_name ?? '' }}{{ $mosque->district && $mosque->division ? ', ' : '' }}
                        {{ $mosque->division->bn_name ?? '' }}
                    </p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="no-results">
                <i class="fa fa-search"></i>
                <h4>No mosques found</h4>
                <p>Try adjusting your search filters</p>
            </div>
        </div>
        @endforelse

        <div class="col-md-12">
          <nav>
            <div class="text-center">
              {{ $mosques->links('pagination.ltn') }}
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){

    let division_id = '{{ request('division_id') }}';
    let district_id = '{{ request('district_id') }}';
    let upazila_id = '{{ request('upazila_id') }}';
    let union_id = '{{ request('union_id') }}';
    let village_id = '{{ request('village_id') }}';

    if(division_id){
        $.get("{{ url('/get-districts') }}/" + division_id, function(data){
            let html = '<option value="">-- Select District --</option>';
            data.forEach(function(row){
                let selected = district_id == row.id ? 'selected' : '';
                html += `<option value="${row.id}" ${selected}>${row.bn_name}</option>`;
            });
            $('#district').html(html);
        });
    }

    if(district_id){
        $.get("{{ url('/get-upazilas') }}/" + district_id, function(data){
            let html = '<option value="">-- Select Upazila --</option>';
            data.forEach(function(row){
                let selected = upazila_id == row.id ? 'selected' : '';
                html += `<option value="${row.id}" ${selected}>${row.bn_name}</option>`;
            });
            $('#upazila').html(html);
        });
    }

    if(upazila_id){
        $.get("{{ url('/get-unions') }}/" + upazila_id, function(data){
            let html = '<option value="">-- Select Union --</option>';
            data.forEach(function(row){
                let selected = union_id == row.id ? 'selected' : '';
                html += `<option value="${row.id}" ${selected}>${row.bn_name}</option>`;
            });
            $('#union').html(html);
        });
    }

    if(union_id){
        $.get("{{ url('/get-villages') }}/" + union_id, function(data){
            let html = '<option value="">-- Select Village --</option>';
            data.forEach(function(row){
                let selected = village_id == row.id ? 'selected' : '';
                html += `<option value="${row.id}" ${selected}>${row.bn_name}</option>`;
            });
            $('#village').html(html);
        });
    }

    $('#division').on('change', function(){
      let division_id = $(this).val();

      $('#district').html('<option value="">Loading...</option>');
      $('#upazila').html('<option value="">-- Select Upazila --</option>');
      $('#union').html('<option value="">-- Select Union --</option>');
      $('#village').html('<option value="">-- Select Village --</option>');

      if(division_id){
        $.get("{{ url('/get-districts') }}/" + division_id, function(data){
          let html = '<option value="">-- Select District --</option>';
          data.forEach(function(row){
            html += `<option value="${row.id}">${row.bn_name}</option>`;
          });
          $('#district').html(html);
        });
      } else {
        $('#district').html('<option value="">-- Select District --</option>');
      }
    });

    $('#district').on('change', function(){
      let district_id = $(this).val();

      $('#upazila').html('<option value="">Loading...</option>');
      $('#union').html('<option value="">-- Select Union --</option>');
      $('#village').html('<option value="">-- Select Village --</option>');

      if(district_id){
        $.get("{{ url('/get-upazilas') }}/" + district_id, function(data){
          let html = '<option value="">-- Select Upazila --</option>';
          data.forEach(function(row){
            html += `<option value="${row.id}">${row.bn_name}</option>`;
          });
          $('#upazila').html(html);
        });
      } else {
        $('#upazila').html('<option value="">-- Select Upazila --</option>');
      }
    });

    $('#upazila').on('change', function(){
        let upazila_id = $(this).val();

        $('#union').html('<option value="">Loading...</option>');
        $('#village').html('<option value="">-- Select Village --</option>');

        if(upazila_id){
            $.get("{{ url('/get-unions') }}/" + upazila_id, function(data){
                let html = '<option value="">-- Select Union --</option>';
                data.forEach(function(row){
                    html += `<option value="${row.id}">${row.bn_name}</option>`;
                });
                $('#union').html(html);
            });
        } else {
            $('#union').html('<option value="">-- Select Union --</option>');
        }
    });

    $('#union').on('change', function(){
        let union_id = $(this).val();

        $('#village').html('<option value="">Loading...</option>');

        if(union_id){
            $.get("{{ url('/get-villages') }}/" + union_id, function(data){
                let html = '<option value="">-- Select Village --</option>';
                data.forEach(function(row){
                    html += `<option value="${row.id}">${row.bn_name}</option>`;
                });
                $('#village').html(html);
            });
        } else {
            $('#village').html('<option value="">-- Select Village --</option>');
        }
    });

  });
</script>

@endsection