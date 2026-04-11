@extends('admin.master')
@section('title',"Admin Dashboard | Create Section Setup")
@section('body')
    <section class="pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Section Setup</h3>
            </div>

            <form action="{{route('section-setups.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
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
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="page_id">Page</label>
                                <select name="page_id" id="page_id" class="form-control select2bs4 @error('page_id') is-invalid @enderror">
                                    <option value="">Select Page (Optional)</option>
                                    @foreach($pages as $page)
                                        <option value="{{$page->id}}" {{ old('page_id') == $page->id ? 'selected' : '' }}>{{$page->name_en}}</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">Assign this section setup to a specific page</small>
                                @error('page_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title_id">Title</label>
                                <select name="title_id" id="title_id" class="form-control select2bs4 @error('title_id') is-invalid @enderror">
                                    <option value="">Select Title</option>
                                    @foreach($titles as $title)
                                        <option value="{{$title->id}}" {{ old('title_id') == $title->id ? 'selected' : '' }}>{{$title->title}}</option>
                                    @endforeach
                                </select>
                                @error('title_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sub_title_id">SubTitle</label>
                                <select name="sub_title_id" id="sub_title_id" class="form-control select2bs4 @error('sub_title_id') is-invalid @enderror">
                                    <option value="">Select SubTitle</option>
                                    @foreach($subtitles as $subtitle)
                                        <option value="{{$subtitle->id}}" {{ old('sub_title_id') == $subtitle->id ? 'selected' : '' }}>{{$subtitle->title}}</option>
                                    @endforeach
                                </select>
                                @error('sub_title_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="content_id">Content</label>
                                <select name="content_id" id="content_id" class="form-control select2bs4 @error('content_id') is-invalid @enderror">
                                    <option value="">Select Content</option>
                                    @foreach($contents as $content)
                                        <option value="{{$content->id}}" {{ old('content_id') == $content->id ? 'selected' : '' }}>{{ $content->name ? $content->name . ' - ' . Str::limit($content->content, 30) : Str::limit($content->content, 50) }}</option>
                                    @endforeach
                                </select>
                                @error('content_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="active" name="active" value="1" {{ old('active', 1) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="active">Active (Show on frontend)</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pricing_id">Pricing <span class="text-danger">*</span></label>
                                <select name="pricing_id" id="pricing_id" class="form-control @error('pricing_id') is-invalid @enderror" required>
                                    <option value="">Select Pricing</option>
                                    @foreach($pricings as $pricing)
                                        <option value="{{$pricing->id}}" {{ old('pricing_id') == $pricing->id ? 'selected' : '' }}>{{ $pricing->price }} {{ $pricing->currency }}</option>
                                    @endforeach
                                </select>
                                @error('pricing_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="features">Features</label>
                        <select name="features[]" id="features" class="form-control select2bs4 @error('features') is-invalid @enderror" multiple="multiple">
                            @foreach($features as $feature)
                                <option value="{{$feature->id}}">{{$feature->feature}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Hold Ctrl (Cmd on Mac) to select multiple features</small>
                        @error('features')
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
                    <button type="submit" class="btn btn-primary">Create Setup</button>
                    <a href="{{route('section-setups.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
