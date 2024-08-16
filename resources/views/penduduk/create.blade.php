@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman tambah data penduduk</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('penduduk.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="usia">Usia</label>
                            <select id="usia" class="form-control @error('usia') is-invalid @enderror" name="usia">
                                <option selected>Pilih usia</option>
                                @foreach ($usias as $item)
                                    <option value="{{ $item->id }}">{{ $item->usia }}</option>
                                @endforeach
                            </select>
                            @error('usia')
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
                                    placeholder="Masukkan Jumlah" autofocus>
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
                                    placeholder="Masukkan Jumlah" autofocus>
                                {{-- @error('perempuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/penduduk" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
