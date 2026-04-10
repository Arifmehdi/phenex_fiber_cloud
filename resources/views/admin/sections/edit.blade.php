@extends('admin.master')
@section('title',"Admin Dashboard | Edit Section")
@section('body')
    <section class="pt-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Section</h3>
            </div>

            <form action="{{route('sections.update', $data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="section_name">Section Name <span class="text-danger">*</span></label>
                        <input type="text" name="section_name" id="section_name" class="form-control @error('section_name') is-invalid @enderror" value="{{old('section_name', $data->section_name)}}" placeholder="Enter section name" required>
                        @error('section_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="number" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" value="{{old('serial', $data->serial)}}" placeholder="Enter serial number">
                                @error('serial')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ old('status', $data->status) == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $data->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="page">Page</label>
                        <input type="text" name="page" id="page" class="form-control @error('page') is-invalid @enderror" value="{{old('page', $data->page)}}" placeholder="Enter page name">
                        @error('page')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="side_note">Side Note</label>
                        <textarea name="side_note" id="side_note" class="form-control summernote @error('side_note') is-invalid @enderror" placeholder="Enter side note">{{old('side_note', $data->side_note)}}</textarea>
                        @error('side_note')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update Section</button>
                    <a href="{{route('sections.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
