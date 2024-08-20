@extends('dashboard.layouts.main')

@section('container')
    {{-- @section('contents') --}}
    <div class="py-12">
        <h1>Halaman edit data UMKM</h1>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{-- from tambah data --}}
                <div class="col-lg-8">
                    <form method="post" action="{{ route('umkm.update', $umkm->id) }}" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="mb-3">
                            <label for="umkm_terdaf" class="form-label">UMKM Terdaftar</label>
                            <div class="form-group">
                                <input name="umkm_terdaf" type="text"
                                    class="form-control @error('umkm_terdaf') is-invalid @enderror" id="umkm_terdaf"
                                    value="{{ $umkm->umkm_terdaf }}" placeholder="Masukkan Jumlah" required autofocus>
                                @error('umkm_terdaf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="umkm_tdkterdaf" class="form-label">UMKM Tidak Teradaftar</label>
                            <div class="form-group">
                                <input name="umkm_tdkterdaf" type="text"
                                    class="form-control @error('umkm_tdkterdaf') is-invalid @enderror" id="umkm_tdkterdaf"
                                    value="{{ $umkm->umkm_tdkterdaf }}" placeholder="Masukkan Jumlah" required autofocus>
                                @error('umkm_tdkterdaf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kube_terdaf" class="form-label">Kube Terdaftar</label>
                            <div class="form-group">
                                <input name="kube_terdaf" type="text"
                                    class="form-control @error('kube_terdaf') is-invalid @enderror" id="kube_terdaf"
                                    value="{{ $umkm->kube_terdaf }}" placeholder="Masukkan Jumlah" required autofocus>
                                @error('kube_terdaf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="kube_tdkterdaf" class="form-label">Kube Tidak Terdaftar</label>
                            <div class="form-group">
                                <input name="kube_tdkterdaf" type="text"
                                    class="form-control @error('kube_tdkterdaf') is-invalid @enderror" id="kube_tdkterdaf"
                                    value="{{ $umkm->kube_tdkterdaf }}" placeholder="Masukkan Jumlah" required autofocus>
                                @error('kube_tdkterdaf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/dashboard/umkm" class="btn btn-warning">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
