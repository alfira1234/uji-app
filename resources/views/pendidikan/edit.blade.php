@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman edit data pendidikan</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('pendidikan.update', $pendidikan->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        {{-- <div class="mb-3">
                            <label for="jenis">Status sekolah</label>
                            @error('jenis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                    value="Sekolah Di Usia" checked>
                                <label class="form-check-label" for="jenis">
                                    Sekolah Di Usia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                    value="Putus Sekolah Usia">
                                <label class="form-check-label" for="jenis">
                                    Putus Sekolah Usia
                                </label>
                            </div>
                        </div> --}}

                        <label for="Laki" class="form-label">Status Sekolah</label>
                        <select class="form-select" name="jenis" aria-label="Default select example">
                            <option selected>Masukkan Status</option>
                            <option @if ($pendidikan['jenis'] == 'Sekolah Di Usia') selected @endif value="Sekolah Di Usia">Sekolah Di
                                Usia</option>
                            <option @if ($pendidikan['jenis'] == 'Putus Sekolah Usia') selected @endif value="Putus Sekolah Usia">Putus
                                Sekolah Usia</option>
                        </select>

                        <div class="mb-3">
                            <label for="usia">usia</label>
                            <select id="usia" class="form-control @error('usia') is-invalid @enderror" name="usia">
                                <option selected>Pilih usia</option>
                                @foreach ($usias as $item)
                                    @if ($pendidikan->usia_id == $item->id)
                                        <option value="{{ $item->id }}" selected>{{ $item->usia }}</option>
                                    @else
                                        <option value="{{ $item->id }}">{{ $item->usia }}</option>
                                    @endif
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
                                    value="{{ $pendidikan->laki }}" placeholder="Masukkan Jumlah" required autofocus>
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
                                    value="{{ $pendidikan->perempuan }}" placeholder="Masukkan Jumlah" required autofocus>
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
                    <a href="/pendidikan" class="btn btn-warning">Batal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
