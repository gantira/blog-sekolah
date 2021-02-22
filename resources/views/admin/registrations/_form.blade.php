@csrf

<div class="form-group">
    <label for="name">Name <span class="text-danger">*</span></label>
    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name') ?? $category->name }}">
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</div>
