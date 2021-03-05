@csrf

<div class="form-group">
    <label for="title">Title <span class="text-danger">*</span></label>
    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror"
        value="{{ old('title') ?? $post->title }}">
    @error('title')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="thumbnail">Thumbnail</label>
    <input type="file" name="thumbnail" id="thumbnail" class="form-control-file @error('thumbnail') is-invalid @enderror" accept="image/*">
    @error('thumbnail')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="body">Body <span class="text-danger">*</span></label>
    <textarea id="editor1" name="body">{{ old('body') ?? $post->body }}</textarea>
    @error('body')
    <div class="text-danger">
        <small>{{ $message }}</small>
    </div>
    @enderror
</div>

<div class="form-group">
    <label for="select2SinglePlaceholder">Category <span class="text-danger">*</span></label>
    <select class="select2-single-placeholder form-control @error('title') is-invalid @enderror" name="category"
        id="select2SinglePlaceholder">
        <option value=""></option>
        @foreach ($categories as $key => $item)
        <option {{ $post->categories()->find($key) ? 'selected' : '' }} value="{{ $key }}">{{ $item }}</option>
        @endforeach
    </select>
    @error('category')
    <div class="text-danger">
        <small>{{ $message }}</small>
    </div>
    @enderror

</div>

<div class="form-group">
    <label for="select2Multiple">Tags</label>
    <select class="select2-multiple form-control" name="tags[]" multiple="multiple" id="select2Multiple">
        @foreach ($tags as $key => $item)
        <option {{ $post->tags()->find($key) ? 'selected' : '' }} value="{{ $key }}">{{ $item }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="status">Status <span class="text-danger">*</span></label>
    <select class="form-control" name="status" id="status">
        <option {{ $post->status == 'published' ? 'selected' : '' }} value="published">Published</option>
        <option {{ $post->status == 'draft' ? 'selected' : '' }} value="draft">Draft</option>
    </select>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</div>




@push('css')
<!-- Select2 -->
<link href="{{ asset('ruangadmin/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
<!-- Bootstrap DatePicker -->
<link href="{{ asset('ruangadmin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<!-- Bootstrap Touchspin -->
<link href="{{ asset('ruangadmin/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">
<!-- ClockPicker -->
<link href="{{ asset('ruangadmin/vendor/clock-picker/clockpicker.css') }}" rel="stylesheet">
@endpush

@push('js')
<!-- Select2 -->
<script src="{{ asset('ruangadmin/vendor/select2/dist/js/select2.min.js') }}"></script>
<!-- Bootstrap Datepicker -->
<script src="{{ asset('ruangadmin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap Touchspin -->
<script src="{{ asset('ruangadmin/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
<!-- ClockPicker -->
<script src="{{ asset('ruangadmin/vendor/clock-picker/clockpicker.js') }}"></script>
<!-- RuangAdmin Javascript -->
<script src="{{ asset('ruangadmin/js/ruang-admin.min.js') }}"></script>
<!-- Javascript for this page -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace( 'editor1' );

         $('.select2-single').select2();

         // Select2 Single  with Placeholder
         $('.select2-single-placeholder').select2({
             placeholder: "Select a Province",
             allowClear: true
         });

         // Select2 Multiple
         $('.select2-multiple').select2();

     });
</script>
@endpush
