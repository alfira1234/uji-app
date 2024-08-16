@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman edit data agama</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('agama.update', $agama->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <select class="form-select" name="agama" aria-label="Default select example">
                            <option selected>Agama</option>
                            <option @if ($agama['agama'] == 'Islam') selected @endif value="Islam">Islam</option>
                            <option @if ($agama['agama'] == 'Kristen') selected @endif value="Kristen">Kristen</option>
                            <option @if ($agama['agama'] == 'Hindu') selected @endif value="Hindu">Hindu</option>
                            <option @if ($agama['agama'] == 'Budha') selected @endif value="Budha">Budha</option>
                        </select>

                        <div class="mb-3">
                            <label for="Laki" class="form-label">Laki-laki</label>
                            <div class="form-group">
                                <input name="Laki" type="text"
                                    class="form-control @error('Laki') is-invalid @enderror" id="Laki"
                                    value="{{ $agama->Laki }}" placeholder="Masukkan Jumlah" autofocus>
                                @error('Laki')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="Perempuan" class="form-label">Perempuan</label>
                            <div class="form-group">
                                <input name="Perempuan" type="text"
                                    class="form-control @error('Perempuan') is-invalid @enderror" id="Perempuan"
                                    value="{{ $agama->Perempuan }}" placeholder="Masukkan Jumlah" autofocus>
                                @error('Perempuan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/agama" class="btn btn-warning">Batal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
