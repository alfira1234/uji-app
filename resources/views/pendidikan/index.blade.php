@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}

    <div class="row">
        {{-- Buat Konten di sini --}}
        <!-- Begin Page Content -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabel daftar pendidikan</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('pendidikan.create') }}">
                <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
        </div>


        <div class="card-body">
            <div style="overflow-x:auto;">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-sm text-left text-gray-900 px-20 py-15 text-center">No</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Jenis</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Usia</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Laki-laki</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Perempuan</th>
                            <th class="text-sm front-medium text-gray-900 px-20 py-15 text-center">Aksi</th>
                        </tr>
                    </thead>

                    @foreach ($pendidikan as $item)
                        <tbody>
                            <tr>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                                    {{ $item->jenis }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->usias->usia }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->laki }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                                    {{ $item->perempuan }}
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('pendidikan.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm"><span><i
                                                class="fa-solid fa-pen-to-square"></i></span></a>

                                    <form action="{{ route('pendidikan.delete', $item->id) }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('yakin ingin menghapus?');"><span><i
                                                    class="fa-solid fa-trash"></i></span></button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

                <div class="form-group d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/penduduk" class="btn btn-warning">Kembali</a>
                    <a href="/pencaharian" class="btn btn-primary">Lanjut</a>
                </div>
            </div>
        </div>
    </div>
@endsection
