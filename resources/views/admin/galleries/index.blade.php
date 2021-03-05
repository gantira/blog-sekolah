<x-admin-layout>

    <div class="container-fluid" id="container-wrapper">
        <x-admin.alert />

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                        <form method="GET" action="{{ route('admin.galleries.index') }}" class="w-100">
                            <input type="search" name="search" id="search" class="form-control">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <x-admin.table class="">
                            <x-admin.thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </x-admin.thead>
                            <x-admin.tbody>
                                @forelse ($galleries as $key => $item)
                                <tr>
                                    <td>{{ $galleries->firstItem() + $key }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! \Str::limit(strip_tags($item->body), 200) !!}</td>
                                    <td>
                                        <x-admin.badge :status="$item->status">{{ $item->status }}</x-admin.badge>
                                    </td>
                                    <td class="d-flex justify-content-end">
                                        <a href="{{ route('admin.galleries.edit', $item) }}" class="btn btn-primary mr-1">Edit</a>

                                        <form action="{{ route('admin.galleries.delete', $item) }}" method="POST" onclick="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Not Found</td>
                                </tr>
                                @endforelse
                            </x-admin.tbody>
                        </x-admin.table>
                    </div>
                    <div class="card-footer">
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>

</x-admin-layout>
