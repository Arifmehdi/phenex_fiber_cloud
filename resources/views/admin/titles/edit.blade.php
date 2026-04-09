@extends('admin.master')
@section('title',"Admin Dashboard | Edit Title")
@section('body')
    <section class="pt-5">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Title</h3>
            </div>

            <form action="{{route('titles.update', $data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title', $data->title)}}" placeholder="Enter title" required>
                        @error('title')
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
                    <button type="submit" class="btn btn-info">Update Title</button>
                    <a href="{{route('titles.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
