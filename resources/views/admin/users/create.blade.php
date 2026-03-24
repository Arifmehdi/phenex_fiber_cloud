@extends('admin.master')
@section('title', "Admin Dashboard | User Create")
@section('body')
<section class="content pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Create User</h3>
                    </div>

                    <form action="{{ route('admin.create-user') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            {{-- Name, Email, Password --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name') }}" required>
                                        @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" value="{{ old('email') }}" required>
                                        @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" required>
                                        @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Mobile, Designation, Membership Type --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile Number" value="{{ old('mobile') }}">
                                        @error('mobile')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" name="designation" id="designation" class="form-control @error('designation') is-invalid @enderror" placeholder="Designation" value="{{ old('designation') }}">
                                        @error('designation')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="membership_type">Membership Type</label>
                                        <select name="membership_type" id="membership_type" class="form-control @error('membership_type') is-invalid @enderror">
                                            <option value="">-- Select Membership Type --</option>
                                            <option value="1" {{ old('membership_type') == '1' ? 'selected' : '' }}>Executive Member</option>
                                            <option value="2" {{ old('membership_type') == '2' ? 'selected' : '' }}>Lifetime Member</option>
                                            <option value="3" {{ old('membership_type') == '3' ? 'selected' : '' }}>General Member</option>
                                            <option value="4" {{ old('membership_type') == '4' ? 'selected' : '' }}>Donor</option>
                                            <option value="5" {{ old('membership_type') == '5' ? 'selected' : '' }}>Volunteer</option>
                                            <option value="6" {{ old('membership_type') == '6' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        @error('membership_type')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" value="{{ old('address') }}">
                                @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            </div>

                            {{-- Short Bio --}}
                            <div class="form-group">
                                <label for="short_bio">Short Bio</label>
                                <textarea name="short_bio" id="short_bio" class="form-control @error('short_bio') is-invalid @enderror" rows="3" placeholder="A short biography...">{{ old('short_bio') }}</textarea>
                                @error('short_bio')<span class="invalid-feedback">{{ $message }}</span>@enderror
                            </div>

                             {{-- Social URLs --}}
                             <hr>
                             <h5>Social Links</h5>
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="fb_url">Facebook URL</label>
                                         <input type="url" name="fb_url" id="fb_url" class="form-control @error('fb_url') is-invalid @enderror" placeholder="https://facebook.com/username" value="{{ old('fb_url') }}">
                                         @error('fb_url')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <div class="form-group">
                                         <label for="twitter_url">Twitter URL</label>
                                         <input type="url" name="twitter_url" id="twitter_url" class="form-control @error('twitter_url') is-invalid @enderror" placeholder="https://twitter.com/username" value="{{ old('twitter_url') }}">
                                         @error('twitter_url')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="insta_url">Instagram URL</label>
                                        <input type="url" name="insta_url" id="insta_url" class="form-control @error('insta_url') is-invalid @enderror" placeholder="https://instagram.com/username" value="{{ old('insta_url') }}">
                                        @error('insta_url')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="yt_url">YouTube URL</label>
                                        <input type="url" name="yt_url" id="yt_url" class="form-control @error('yt_url') is-invalid @enderror" placeholder="https://youtube.com/channel/..." value="{{ old('yt_url') }}">
                                        @error('yt_url')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="local_url">Other URL</label>
                                        <input type="url" name="local_url" id="local_url" class="form-control @error('local_url') is-invalid @enderror" placeholder="Your personal website" value="{{ old('local_url') }}">
                                        @error('local_url')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                            </div>
                            <hr>

                            {{-- Image --}}
                            <div class="form-group">
                                <label for="image">User Image (Width 600px, Height 900px)</label>
                                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                                @error('image')<span class="invalid-feedback d-block">{{ $message }}</span>@enderror
                            </div>

                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Create User">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
