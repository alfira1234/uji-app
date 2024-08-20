@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman edit data kesehatan</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('kesehatan.update', $kesehatan->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="jns_kon">jns_kon</label>
                            <select id="jns_kon" class="form-control @error('jns_kon') is-invalid @enderror"
                                name="jns_kon">
                                <option selected>Pilih Kondisi</option>
                                @foreach ($jns_kes as $item)
                                    @if ($kesehatan->jns_kes_id == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->jns_kon }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->jns_kon }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('jns_kon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="laki" class="form-label">Laki-laki</label>
                            <div class="form-group">
                                <input name="laki" type="text"
                                    class="form-control @error('laki') is-invalid @enderror" id="laki"
                                    value="{{ $kesehatan->laki }}" placeholder="Masukkan Jumlah" autofocus>
                                {{-- @error('laki')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="perempuan" class="form-label">Perempuan</label>
                            <div class="form-group">
                                <input name="perempuan" type="text"
                                    class="form-control @error('perempuan') is-invalid @enderror" id="perempuan"
                                    value="{{ $kesehatan->perempuan }}" placeholder="Masukkan Jumlah" autofocus>
                                {{-- @error('perempuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/dashboard/kesehatan" class="btn btn-warning">Batal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
