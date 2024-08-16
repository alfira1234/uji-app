@extends('layouts.main')

@section('navbar')
    <h1> halaman post</h1>

    {{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-30 lg:px-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <a href="{{ route('post.create')}}" class="mb-3">
                    <button type="button" class="border bg-gray-500 text-white rounded-md px-4 py-2 m-2">
                        Tambah Data
                    </button>
                </a>

<table class="w-full table-auto border mt-3">
    <thead class="border-b">
        <tr>
            <th class="text-sm text-left text-gray-900 px-20 py-15">No</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Tanggal Kedatangan</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Jam Kedatangan</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Jumlah Orang</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Nama Lengkap</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Email</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">No Telepon</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Kota Asal</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Negara Asal</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">Keterangan Tambahan</th>
            <th class="text-sm front-medium text-gray-900 px-20 py-15">aksi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($post as $item)
            <tr>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap">
                    {{ $item->id }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->tgl_datang }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->jm_datang }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->jml_org }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->nam_leng }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->email }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->no_tlp }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->askot }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->asne }}
                </td>
                <td class="text-sm text-gray-900 font-light px-10 py-6 whitespace-nowrap text-center">
                    {{ $item->ket_tam }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            </div>
        </div>
    </div>
</div> --}}
@endsection
