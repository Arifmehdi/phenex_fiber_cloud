@extends('admin.master')
@section('title',"Admin Dashboard | Create Content")
@section('body')
    <section class="pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Content</h3>
            </div>

            <form action="{{route('contents.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name" value="{{old('name')}}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Content <span class="text-danger">*</span></label>
                        <textarea name="content" id="content" class="form-control summernote @error('content') is-invalid @enderror" placeholder="Enter content" required>{{old('content')}}</textarea>
                        @error('content')
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

                    <div class="form-group">
                        <label for="accent_color">Accent Color</label>
                        <input type="text" name="accent_color" id="accent_color" class="form-control @error('accent_color') is-invalid @enderror" placeholder="Enter accent color (e.g., #FF5733)" value="{{old('accent_color')}}">
                        @error('accent_color')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="Enter icon class (e.g., fa-star)" value="{{old('icon')}}">
                        @error('icon')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control @error('button_text') is-invalid @enderror" placeholder="Enter button text" value="{{old('button_text')}}">
                        @error('button_text')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="button_link">Button Link</label>
                        <input type="text" name="button_link" id="button_link" class="form-control @error('button_link') is-invalid @enderror" placeholder="Enter button link URL" value="{{old('button_link')}}">
                        @error('button_link')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create Content</button>
                    <a href="{{route('contents.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
