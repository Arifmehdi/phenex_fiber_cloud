@csrf
<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $company->name ?? '') }}" required>
        @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $company->address ?? '') }}</textarea>
        @error('address')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $company->phone ?? '') }}">
        @error('phone')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" name="img" id="img" class="form-control-file @error('img') is-invalid @enderror">
        @error('img')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        @if (isset($company) && $company->img)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $company->img) }}" alt="{{ $company->name }}" width="100">
            </div>
        @endif
    </div>
    <div class="form-group form-check">
        <input type="hidden" name="active" value="0">
        <input type="checkbox" name="active" id="active" class="form-check-input" value="1" {{ old('active', isset($company) && $company->active ? '1' : '') == '1' ? 'checked' : '' }}>
        <label class="form-check-label" for="active">Active</label>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">Cancel</a>
</div>
