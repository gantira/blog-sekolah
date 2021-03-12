<x-admin-layout>


    <div class="container-fluid" id="container-wrapper">
        <x-admin.alert />

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Registration</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between w-100">
                        <form method="GET" action="{{ route('bagas.registrations.index') }}" class="w-100">
                            <input type="search" name="search" id="search" class="form-control">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <x-admin.table>
                            <x-admin.thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Gelombang</th>
                                    <th>ABK</th>
                                    <th>Alamat</th>
                                    <th>Nama Ayah</th>
                                    <th>Nama Ibu</th>
                                    <th>Daerah</th>
                                    <th>No HP Ayah</th>
                                    <th>No HP Ibu</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Info</th>
                                    <th>Tanggal Daftar</th>
                                    <th></th>
                                </tr>
                            </x-admin.thead>
                            <x-admin.tbody>
                                @forelse ($registrations as $key => $item)
                                <tr>
                                    <td>{{ $registrations->firstItem() + $key }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nama_panggilan }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->ttl }}</td>
                                    <td>{{ $item->kewarganegaraan }}</td>
                                    <td>{{ $item->gelombang }}</td>
                                    <td>{{ $item->abk }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->nama_ayah }}</td>
                                    <td>{{ $item->nama_ibu }}</td>
                                    <td>{{ $item->daerah }}</td>
                                    <td>{{ $item->no_hp_ayah }}</td>
                                    <td>{{ $item->no_hp_ibu }}</td>
                                    <td>{{ $item->tlp }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->info_dari }}</td>
                                    <td>{{ $item->created_at->format('d m, Y') }}</td>
                                    <td class="d-flex justify-content-end">
                                        {{-- <a href="{{ route('bagas.registrations.edit', $item) }}"
                                            class="btn  btn-primary mr-1">Edit</a> --}}

                                        <form action="{{ route('bagas.registrations.delete', $item) }}" method="POST"
                                            onclick="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn  btn-primary">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">Not Found</td>
                                </tr>
                                @endforelse
                            </x-admin.tbody>
                        </x-admin.table>
                    </div>
                    <div class="card-footer">
                        {{ $registrations->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->
    </div>

</x-admin-layout>
