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
                        <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')

                            @include('admin.posts._form', ['submit' => 'Update'])

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--Row-->
    </div>

</x-admin-layout>
