<x-admin-layout>

    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Export Excel</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Registration</li>
                <li class="breadcrumb-item active" aria-current="page">Export Excel</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <!-- Select2 -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.registrations.exportExcel') }}" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-success">Export EXCEL</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--Row-->

    </div>

</x-admin-layout>
