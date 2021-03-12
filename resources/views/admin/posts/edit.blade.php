<x-admin-layout>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit a Post</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Edit a Post</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Select2 -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Please fill in the following form</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bagas.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')

                            @include('admin.posts._form', ['submit' => 'Update'])

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--Row-->
    </div>

    @push('css')
    <!-- Select2 -->
    <link href="{{ asset('ruangadmin/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap DatePicker -->
    <link href="{{ asset('ruangadmin/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}"
        rel="stylesheet">
    <!-- Bootstrap Touchspin -->
    <link href="{{ asset('ruangadmin/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}"
        rel="stylesheet">
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

            // Select2 Single with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Category",
                allowClear: true
            });

            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select a Tags",
                allowClear: true
            });

        });
    </script>
    @endpush

</x-admin-layout>
