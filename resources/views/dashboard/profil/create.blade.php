@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Isi Profil</h1>
    </div>


    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900"> --}}
    <form class="row g-3" class="mt-6 space-y-6">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Ketua RT</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Ketua RW</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Pendamping</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Pokmas</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Koordinat</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">KK</label>
            <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="col-6">
            <label for="inputAddress2" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">RT</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">RW</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        {{-- <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div> --}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="/dashboard/profil" class="btn btn-warning">Batal</a>
        </div>
    </form>
    {{-- </div>
        </div>
    </div> --}}
@endsection
