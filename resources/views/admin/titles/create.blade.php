@extends('admin.master')
@section('title',"Admin Dashboard | Create Title")
@section('body')
    <section class="pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Title</h3>
            </div>

            <form action="{{route('titles.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Enter title" required>
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
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
                    <button type="submit" class="btn btn-primary">Create Title</button>
                    <a href="{{route('titles.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
