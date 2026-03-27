@extends('frontend.layouts.ecommercemaster')
@section('title', "Search Result")
@section('content')
<section class="section my-0 py-0">
	<div class="container py-5">

    <div class="row g-4">
        <!-- Main Content -->
        <div class="col-12">
            <!-- Top filter section -->
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <form method="GET" class="d-flex align-items-center gap-2">
						<select name="sort" id="sort" class="form-select w-auto" onchange="this.form.submit()">
							<option value="1" @if(request()->get('sort')==1) selected @endif>Sort by Latest</option>
							<option value="2" @if(request()->get('sort')==2) selected @endif>Sort by Oldest</option>
							<option value="3" @if(request()->get('sort')==3) selected @endif>Sort by Price: High → Low</option>
							<option value="4" @if(request()->get('sort')==4) selected @endif>Sort by Price: Low → High</option>
						</select>
						<input type="hidden" name="query" value="{{ $query }}">
					</form>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="text-muted">
                        Showing <strong>{{ $products->firstItem() }} - {{ $products->lastItem() }}</strong> of
                        <strong>{{ $products->total() }}</strong> results for <strong>"{{ $query }}"</strong>
                    </span>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="row g-4">
                 @foreach ($products as $product)
					<div class="col-6 col-md-4 col-lg-3">
						<div class="card h-100 border-0 shadow-sm card-hover">
							
							<!-- Image -->
							<a href="{{ route('productDetails', $product->slug) }}" class="d-block">
								<img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $product->fi()]) }}" 
									class="card-img-top rounded-top" 
									alt="{{ $product->name_en }}">
							</a>

							<!-- Body -->
							<div class="card-body d-flex flex-column p-3">

								<!-- Category -->
								<small class="d-block text-uppercase mb-1">
									@foreach ($product->categories as $key => $category)
										<span class="font-weight-bold" style="color: #dc3545">
											{{ $category->name_en }}
										</span>@if(!$loop->last), @endif
									@endforeach
								</small>

								<!-- Product Name -->
								<h6 class="fw-semibold text-truncate mb-1">
									<a href="{{ route('productDetails', $product->slug) }}" 
									class="text-dark text-decoration-none">
										{{ $product->name_en }}
									</a>
								</h6>

								<!-- Price -->
								<div class="mb-1">
									@if($product->discount > 0.00)
										<span class="text-muted text-decoration-line-through me-2 w3-small">
											{{ number_format($product->price, 2) }} ৳
										</span>
									@endif
									<span class="fw-bold text-primary w3-small">
										{{ number_format($product->final_price, 2) }} ৳
									</span>
								</div>

								<div class="mt-auto productCartItem" data-product="{{ $product->id }}">
									@include('frontend.home.includes.productCartItem')
								</div>

							</div>
						</div>
					</div>
				@endforeach
            </div>

            <!-- Pagination -->
            <div class="row mt-4">
                <div class="col">
                    <nav>
                        <ul class="pagination justify-content-end mb-0">
                            {{ $products->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection
