@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Isi Profil</h1>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form method="post" action="{{ route('profil.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data"
                    class="row g-3">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="ketua_rt" class="form-label">Ketua RT</label>
                            <input type="text" name="ketua_rt" class="form-control" id="ketua_rt"
                                placeholder="Nama Ketua Rt">
                        </div>
                        <div class="col-md-6">
                            <label for="ketua_rw" class="form-label">Ketua RW</label>
                            <input type="text" name="ketua_rw" class="form-control" id="ketua_rw"
                                placeholder="Nama Ketua Rw">
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="pendamping" class="form-label">Pendamping</label>
                        <input type="text" name="pendamping" class="form-control" id="pendamping"
                            placeholder="Masukkan Nama Pendamping">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pokmas" class="form-label">Pokmas</label>
                            <input type="text" name="pokmas" class="form-control" id="pokmas"
                                placeholder="Masukkan Nama Pokmas">
                        </div>
                        <div class="col-md-4">
                            <label for="koordinat" class="form-label">Koordinat</label>
                            <input type="text" name="koordinat" class="form-control" id="koordinat"
                                placeholder="Masukkan Koordinat misal : -1.25738263,187.26389">
                        </div>
                        <div class="col-md-2">
                            <label for="jml_kk" class="form-label">Jumlah KK</label>
                            <input type="text" name="jml_kk" class="form-control" id="jml_kk"
                                placeholder="Masukkan Jumlah KK">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <input type="text" name="kelurahan" class="form-control" id="kelurahan"
                                placeholder="Masukkan Kelurahan">
                        </div>
                        <div class="col-6">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                placeholder="Masukkan Kecamatan">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="rt" class="form-label">RT</label>
                            <input type="text" name="rt" class="form-control" id="rt"
                                placeholder="Masukkan Wilayah RT">
                        </div>
                        <div class="col-md-2">
                            <label for="rw" class="form-label">RW</label>
                            <input type="text" name="rw" class="form-control" id="rw"
                                placeholder="Masukkan Wilayah RW">
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <button type="submit" class="btn btn-primary">simpan</button>
                        <a href="/dashboard/profil" class="btn btn-warning">Batal</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
