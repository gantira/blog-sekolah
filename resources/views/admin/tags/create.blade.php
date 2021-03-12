<x-admin-layout>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create a Tag</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">Create a Tag</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Select2 -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Please fill in the following form</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bagas.tags.store') }}" method="POST">

                            @include('admin.tags._form', ['submit' => 'Submit'])

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
    <script>
        $(document).ready(function () {


             $('.select2-single').select2();

             // Select2 Single  with Placeholder
             $('.select2-single-placeholder').select2({
                 placeholder: "Select a Province",
                 allowClear: true
             });

             // Select2 Multiple
             $('.select2-multiple').select2();

             // Bootstrap Date Picker
             $('#simple-date1 .input-group.date').datepicker({
                 format: 'dd/mm/yyyy',
                 todayBtn: 'linked',
                 todayHighlight: true,
                 autoclose: true,
             });

             $('#simple-date2 .input-group.date').datepicker({
                 startView: 1,
                 format: 'dd/mm/yyyy',
                 autoclose: true,
                 todayHighlight: true,
                 todayBtn: 'linked',
             });

             $('#simple-date3 .input-group.date').datepicker({
                 startView: 2,
                 format: 'dd/mm/yyyy',
                 autoclose: true,
                 todayHighlight: true,
                 todayBtn: 'linked',
             });

             $('#simple-date4 .input-daterange').datepicker({
                 format: 'dd/mm/yyyy',
                 autoclose: true,
                 todayHighlight: true,
                 todayBtn: 'linked',
             });

             // TouchSpin

             $('#touchSpin1').TouchSpin({
                 min: 0,
                 max: 100,
                 boostat: 5,
                 maxboostedstep: 10,
                 initval: 0
             });

             $('#touchSpin2').TouchSpin({
                 min: 0,
                 max: 100,
                 decimals: 2,
                 step: 0.1,
                 postfix: '%',
                 initval: 0,
                 boostat: 5,
                 maxboostedstep: 10
             });

             $('#touchSpin3').TouchSpin({
                 min: 0,
                 max: 100,
                 initval: 0,
                 boostat: 5,
                 maxboostedstep: 10,
                 verticalbuttons: true,
             });

             $('#clockPicker1').clockpicker({
                 donetext: 'Done'
             });

             $('#clockPicker2').clockpicker({
                 autoclose: true
             });

             let input = $('#clockPicker3').clockpicker({
                 autoclose: true,
                 'default': 'now',
                 placement: 'top',
                 align: 'left',
             });

             $('#check-minutes').click(function (e) {
                 e.stopPropagation();
                 input.clockpicker('show').clockpicker('toggleView', 'minutes');
             });

         });
    </script>
    @endpush

</x-admin-layout>
