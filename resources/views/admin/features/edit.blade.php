@extends('admin.master')
@section('title',"Admin Dashboard | Edit Feature")
@section('body')
    <section class="pt-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Feature</h3>
            </div>

            <form action="{{route('features.update', $data->id)}}" method="POST">
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

                    <div class="form-group">
                        <label for="feature">Feature <span class="text-danger">*</span></label>
                        <input type="text" name="feature" id="feature" class="form-control @error('feature') is-invalid @enderror" value="{{old('feature', $data->feature)}}" placeholder="Enter feature" required>
                        @error('feature')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
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
                    <button type="submit" class="btn btn-info">Update Feature</button>
                    <a href="{{route('features.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
