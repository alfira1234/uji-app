@extends('layouts.main')

@section('navbar')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman tambah data usia</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('usia.store') }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="usia" class="form-label">Usia</label>
                            <div class="form-group">
                                <input name="usia" type="text"
                                    class="form-control @error('usia') is-invalid @enderror" id="usia"
                                    placeholder="Masukkan usia" required autofocus>
                                @error('usia')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/usia" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
