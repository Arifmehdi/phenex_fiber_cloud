@extends('website.layouts.master')

@section('title', 'News - '. env('APP_NAME') )

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
    
    <!-- Section: inner-header -->
    <x-breadcrumb slug="News & Media" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>

    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">

          @forelse($blogs as $blog)
          {{--@dd($blog)--}}
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <a href="{{ route('news.details', $blog->id) }}">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="{{ route('imagecache', ['template' => 'cpmd', 'filename' => $blog->fi()]) }}" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                </a>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                    <ul>
                        <li class="font-16 text-white font-weight-600">
                            {{ $blog->created_at->format('d') }}
                        </li>
                        <li class="font-12 text-white text-uppercase">
                            {{ $blog->created_at->format('M') }}
                        </li>
                    </ul>

                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{ route('news.details', $blog->id) }}">{{ $blog->title }}</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 0 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 0 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10"> {{ \Illuminate\Support\Str::words(strip_tags($blog->excerpt), 20, '...') }}</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          @empty 
          <p>There have no news now</p>
          @endforelse
            <div class="col-md-12">
              <nav>
                <!-- <ul class="pagination theme-colored">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                </ul> -->

                <div class="text-center">
                    {{ $blogs->links('pagination.ltn') }}
                </div>

              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection