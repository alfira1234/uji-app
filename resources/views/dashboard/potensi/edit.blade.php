@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman edit data Potensi</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('potensi.update', $potensi->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="mb-3">
                            <label for="potensi" class="form-label">Potensi</label>
                            <div class="form-group">
                                <input name="potensi" type="text"
                                    class="form-control @error('potensi') is-invalid @enderror" id="potensi"
                                    value="{{ $potensi->potensi }}" placeholder="Masukkan Nama Potensi" required autofocus>
                                {{-- @error('potensi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pengembangan" class="form-label">Pengembangan</label>
                            <div class="form-group">
                                <input name="pengembangan" type="text"
                                    class="form-control @error('pengembangan') is-invalid @enderror" id="pengembangan"
                                    value="{{ $potensi->pengembangan }}" placeholder="Pengembangan" required autofocus>
                                @error('pengembangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="pengembangan" class="form-label">pengembangan</label>
                            <div class="form-group">
                                <input id="pengembangan" type="hidden" name="pengembangan"
                                    value="{{ $potensi->pengembangan }}">
                                <trix-editor input="pengembangan"></trix-editor>
                            </div>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="pengembangan" class="form-label">Pengembangan</label>
                            <textarea class="form-control" id="pengembangan" rows="3"
                                value="{{ old('pengembangan', $potensi->pengembangan) }}"></textarea>
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label for="pengembangan" class="form-label">Pengembangan</label>

                            <textarea class="form-control" input="pengembangan" id="pengembangan" name="pengembangan" rows="3"
                                value="{{ old('pengembangan', $potensi->pengembangan) }}"></textarea>
                        </div> --}}

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/dashboard/potensi" class="btn btn-warning">Batal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
