@csrf

<div class="form-group">
    <label for="images">Images</label>
    <input type="file" name="images[]" id="images" class="form-control-file @error('images') is-invalid @enderror  @error('images.*') is-invalid @enderror"
        accept="image/*" multiple>
    @error('images')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    @error('images.*')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="tag">Tag <span class="text-danger">*</span></label>
    <select class="form-control" name="tag" id="tag">
        @foreach ($tags as $key => $item)
        <option {{ $gallery->tags()->find($key) ? 'selected' : '' }} value="{{ $key }}">{{ $item }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="title">Title <span class="text-danger">*</span></label>
    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title') ?? $gallery->title }}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body">{{ old('body') ?? $gallery->body }}</textarea>
    @error('body')
    <div class="text-danger">
        <small>{{ $message }}</small>
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="status">Status <span class="text-danger">*</span></label>
    <select class="form-control" name="status" id="status">
        <option {{ $gallery->status == 'published' ? 'selected' : '' }} value="published">Published</option>
        <option {{ $gallery->status == 'draft' ? 'selected' : '' }} value="draft">Draft</option>
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</div>
