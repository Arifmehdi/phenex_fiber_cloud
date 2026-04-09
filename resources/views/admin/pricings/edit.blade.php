@extends('admin.master')
@section('title',"Admin Dashboard | Edit Pricing")
@section('body')
    <section class="pt-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Pricing</h3>
            </div>

            <form action="{{route('pricings.update', $data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="section_id">Section <span class="text-danger">*</span></label>
                        <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror" required>
                            <option value="">Select Section</option>
                            @foreach($sections as $section)
                                <option value="{{$section->id}}" {{ old('section_id', $data->section_id) == $section->id ? 'selected' : '' }}>{{$section->section_name}}</option>
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
                                <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price', $data->price)}}" placeholder="Enter price" step="0.01" required>
                                @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currency">Currency <span class="text-danger">*</span></label>
                                <input type="text" name="currency" id="currency" class="form-control @error('currency') is-invalid @enderror" value="{{old('currency', $data->currency)}}" placeholder="e.g., USD, BDT, EUR" required>
                                @error('currency')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="side_note">Side Note</label>
                        <textarea name="side_note" id="side_note" class="form-control @error('side_note') is-invalid @enderror" placeholder="Enter side note" rows="3">{{old('side_note', $data->side_note)}}</textarea>
                        @error('side_note')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update Pricing</button>
                    <a href="{{route('pricings.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
