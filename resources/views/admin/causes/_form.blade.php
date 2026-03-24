@csrf
<div class="card-body">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $cause->title ?? '') }}" required>
        @error('title')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
        @error('image')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
        @if (isset($cause) && $cause->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" width="100">
            </div>
        @endif
    </div>
    <div class="form-group">
        <label for="short_description">Short Description</label>
        <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" rows="3">{{ old('short_description', $cause->short_description ?? '') }}</textarea>
        @error('short_description')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control summernote @error('description') is-invalid @enderror">{{ old('description', $cause->description ?? '') }}</textarea>
        @error('description')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="goal_amount">Goal Amount</label>
        <input type="number" name="goal_amount" id="goal_amount" class="form-control @error('goal_amount') is-invalid @enderror" value="{{ old('goal_amount', $cause->goal_amount ?? 0) }}" min="0" step="0.01" required>
        @error('goal_amount')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="raised_amount">Raised Amount</label>
        <input type="number" name="raised_amount" id="raised_amount" class="form-control @error('raised_amount') is-invalid @enderror" value="{{ old('raised_amount', $cause->raised_amount ?? 0) }}" min="0" step="0.01">
        @error('raised_amount')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group form-check">
        <input type="hidden" name="active" value="0">
        <input type="checkbox" name="active" id="active" class="form-check-input" value="1" {{ old('active', isset($cause) && $cause->active ? '1' : '') == '1' ? 'checked' : '' }}>
        <label class="form-check-label" for="active">Active</label>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('admin.causes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
