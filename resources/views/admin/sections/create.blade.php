@extends('admin.master')
@section('title',"Admin Dashboard | Create Section")
@section('body')
    <section class="pt-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create New Section</h3>
            </div>

            <form action="{{route('sections.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="section_name">Section Name <span class="text-danger">*</span></label>
                        <input type="text" name="section_name" id="section_name" class="form-control @error('section_name') is-invalid @enderror" value="{{old('section_name')}}" placeholder="Enter section name" required>
                        @error('section_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="template">Template Style</label>
                        <select name="template" id="template" class="form-control @error('template') is-invalid @enderror">
                            <option value="">Select Template</option>
                            <option value="hero" {{ old('template') == 'hero' ? 'selected' : '' }}>Hero / Banner</option>
                            <option value="about" {{ old('template') == 'about' ? 'selected' : '' }}>About / Story</option>
                            <option value="services" {{ old('template') == 'services' ? 'selected' : '' }}>Services Grid (with Icons)</option>
                            <option value="services_simple" {{ old('template') == 'services_simple' ? 'selected' : '' }}>Services Grid (Simple)</option>
                            <option value="features" {{ old('template') == 'features' ? 'selected' : '' }}>Features List</option>
                            <option value="pricing" {{ old('template') == 'pricing' ? 'selected' : '' }}>Pricing Card</option>
                            <option value="pricing_table" {{ old('template') == 'pricing_table' ? 'selected' : '' }}>Pricing Table</option>
                            <option value="cta" {{ old('template') == 'cta' ? 'selected' : '' }}>Call to Action</option>
                            <option value="contact" {{ old('template') == 'contact' ? 'selected' : '' }}>Contact Section</option>
                            <option value="testimonial" {{ old('template') == 'testimonial' ? 'selected' : '' }}>Testimonials</option>
                            <option value="team" {{ old('template') == 'team' ? 'selected' : '' }}>Team Members</option>
                            <option value="faq" {{ old('template') == 'faq' ? 'selected' : '' }}>FAQ</option>
                            <option value="blog" {{ old('template') == 'blog' ? 'selected' : '' }}>Blog Posts</option>
                            <option value="gallery" {{ old('template') == 'gallery' ? 'selected' : '' }}>Gallery</option>
                            <option value="card" {{ old('template') == 'card' ? 'selected' : '' }}>Card Component</option>
                            <option value="vps_pricing" {{ old('template') == 'vps_pricing' ? 'selected' : '' }}>VPS Pricing Cards</option>
                            <option value="cta_button" {{ old('template') == 'cta_button' ? 'selected' : '' }}>CTA Button Center</option>
                            <option value="call_center" {{ old('template') == 'call_center' ? 'selected' : '' }}>Call Center & Cloud PBX</option>
                            <option value="internet_packages" {{ old('template') == 'internet_packages' ? 'selected' : '' }}>Internet Packages</option>
                            <option value="business_internet" {{ old('template') == 'business_internet' ? 'selected' : '' }}>Business Internet</option>
                            <option value="internet_hero" {{ old('template') == 'internet_hero' ? 'selected' : '' }}>Internet Packages Hero</option>
                            <option value="default" {{ old('template') == 'default' ? 'selected' : '' }}>Default / Generic</option>
                        </select>
                        <small class="text-muted">Select the template style for this section</small>
                        @error('template')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="serial">Serial</label>
                                <input type="number" name="serial" id="serial" class="form-control @error('serial') is-invalid @enderror" value="{{old('serial')}}" placeholder="Enter serial number">
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
                                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="page">Page</label>
                        <input type="text" name="page" id="page" class="form-control @error('page') is-invalid @enderror" value="{{old('page')}}" placeholder="Enter page name">
                        @error('page')
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
                    <button type="submit" class="btn btn-primary">Create Section</button>
                    <a href="{{route('sections.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection
