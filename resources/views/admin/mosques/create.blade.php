@extends('admin.master')
@section('title', 'Admin Dashboard | Create Mosque')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Create Mosque</h3>
                        </div>
                        <form action="{{ route('admin.mosques.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
<div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="division_id">Division</label>
                                            <select name="division_id" id="division_id" class="form-control @error('division_id') is-invalid @enderror" required>
                                                <option value="">-- Select Division --</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}" {{ old('division_id') == $division->id ? 'selected' : '' }}>{{ $division->bn_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('division_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="district_id">District</label>
                                            <select name="district_id" id="district_id" class="form-control @error('district_id') is-invalid @enderror" required>
                                                <option value="">-- Select District --</option>
                                            </select>
                                            @error('district_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="upazila_id">Upazila</label>
                                            <select name="upazila_id" id="upazila_id" class="form-control @error('upazila_id') is-invalid @enderror" required>
                                                <option value="">-- Select Upazila --</option>
                                            </select>
                                            @error('upazila_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="union_id">Union</label>
                                            <select name="union_id" id="union_id" class="form-control @error('union_id') is-invalid @enderror">
                                                <option value="">-- Select Union --</option>
                                            </select>
                                            @error('union_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="village_id">Village</label>
                                            <select name="village_id" id="village_id" class="form-control @error('village_id') is-invalid @enderror">
                                                <option value="">-- Select Village --</option>
                                            </select>
                                            @error('village_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Name" value="{{ old('name') }}" required>
                                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter Address" required>{{ old('address') }}</textarea>
                                    @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="foundation_year">Foundation Year</label>
                                            <input type="text" name="foundation_year" id="foundation_year" class="form-control @error('foundation_year') is-invalid @enderror"
                                                placeholder="Enter Foundation Year" value="{{ old('foundation_year') }}">
                                            @error('foundation_year')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="reg_number">Registration Number</label>
                                            <input type="text" name="reg_number" id="reg_number" class="form-control @error('reg_number') is-invalid @enderror"
                                                placeholder="Enter Registration Number" value="{{ old('reg_number') }}">
                                            @error('reg_number')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="secretary_name">Secretary Name</label>
                                            <input type="text" name="secretary_name" id="secretary_name" class="form-control @error('secretary_name') is-invalid @enderror"
                                                placeholder="Enter Secretary Name" value="{{ old('secretary_name') }}">
                                            @error('secretary_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="imam_name">Imam Name</label>
                                            <input type="text" name="imam_name" id="imam_name" class="form-control @error('imam_name') is-invalid @enderror"
                                                placeholder="Enter Imam Name" value="{{ old('imam_name') }}" >
                                            @error('imam_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Enter Phone Number" value="{{ old('phone') }}" >
                                            @error('phone')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5"
                                        placeholder="Enter Description" >{{ old('description') }}</textarea>
                                    @error('description')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Image (width : 620 , Height : 495)</label>
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                                    @error('image')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" class="form-check-input" id="status"
                                            value="1" {{ old('status') ? 'checked' : '' }} checked>
                                        <label class="form-check-label" for="status">Active</label>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Create Mosque</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#division_id').on('change', function() {
                var divisionId = $(this).val();
                if (divisionId) {
                    $.ajax({
                        url: '/get-districts/' + divisionId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#district_id').empty();
                            $('#district_id').append(
                                '<option value="">-- Select District --</option>');
                            $.each(data, function(key, value) {
                                $('#district_id').append('<option value="' + value.id +
                                    '">' + value.bn_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#district_id').empty();
                    $('#upazila_id').empty();
                }
            });

            $('#district_id').on('change', function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: '/get-upazilas/' + districtId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#upazila_id').empty();
                            $('#upazila_id').append(
                                '<option value="">-- Select Upazila --</option>');
                            $.each(data, function(key, value) {
                                $('#upazila_id').append('<option value="' + value.id +
                                    '">' + value.bn_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#upazila_id').empty();
                }
            });

            $('#upazila_id').on('change', function() {
                var upazilaId = $(this).val();
                if (upazilaId) {
                    $.ajax({
                        url: '/get-unions/' + upazilaId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#union_id').empty();
                            $('#union_id').append(
                                '<option value="">-- Select Union --</option>');
                            $.each(data, function(key, value) {
                                $('#union_id').append('<option value="' + value.id +
                                    '">' + value.bn_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#union_id').empty();
                }
            });

            $('#union_id').on('change', function() {
                var unionId = $(this).val();
                if (unionId) {
                    $.ajax({
                        url: '/get-villages/' + unionId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#village_id').empty();
                            $('#village_id').append(
                                '<option value="">-- Select Village --</option>');
                            $.each(data, function(key, value) {
                                $('#village_id').append('<option value="' + value.id +
                                    '">' + value.bn_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#village_id').empty();
                }
            });
        });
    </script>
@endpush
