@extends('admin.master')
@section('title',"Admin Dashboard | Create Pricing")
@section('body')
    <section class="pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Pricing</h3>
            </div>

            <form action="{{route('pricings.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="section_id">Section <span class="text-danger">*</span></label>
                        <select name="section_id" id="section_id" class="form-control select2bs4 @error('section_id') is-invalid @enderror" required>
                            <option value="">Select Section</option>
                            @foreach($sections as $section)
                                <option value="{{$section->id}}" {{ old('section_id') == $section->id ? 'selected' : '' }}>{{$section->section_name}}</option>
                            @endforeach
                        </select>
                        @error('section_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="price">Price <span class="text-danger">*</span></label>
                                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" placeholder="Enter price" step="0.01" required>
                                @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currency">Currency <span class="text-danger">*</span></label>
                                <select name="currency" id="currency" class="form-control @error('currency') is-invalid @enderror" required>
                                    <option value="">Select Currency</option>
                                    <option value="BDT" {{ old('currency') == '৳' ? 'selected' : '' }}>Taka (BDT) - ৳</option>
                                    <option value="USD" {{ old('currency') == '$' ? 'selected' : '' }}>Dollar (USD) - $</option>
                                </select>
                                @error('currency')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="side_note">Side Note</label>
                        <textarea name="side_note" id="side_note" class="form-control summernote @error('side_note') is-invalid @enderror" placeholder="Enter side note">{{old('side_note')}}</textarea>
                        @error('side_note')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Pricing</button>
                    <a href="{{route('pricings.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
