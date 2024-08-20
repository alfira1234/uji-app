@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="text-align:center">Profil RT {{ auth()->user()->name }} Di Wilayah RW../RT.. Kelurahan Magersari
            Kecamatan Magelang selatan</h1>
    </div>



    <p style="font-size:25px">Ketua RT : Sutrasno</p>
    <p style="font-size:25px">Ketua RW : Sriyono</p>
    <p style="font-size:25px">Pendamping : Anisa Pramudia Wardani</p>
    <p style="font-size:25px">Pokmas : Magersari 2</p>
    <p style="font-size:25px">Koordinat : -7.490471,110.219564</p>
    <p style="font-size:25px">Jumlah : 34</p>
    <p style="font-size:25px">This is a paragraph.</p>
    <h4>This is heading 4</h4>
    <h5>This is heading 5</h5>
    <h6>This is heading 6</h6>

    <p><b>Tip:</b> Use h1 to h6 elements only for headings. Do not use them just to make text bold or big. Use other
        tags for that.</p>

    <p style="font-size:25px">Ketua RT : Sutrasno</p>
    <p style="font-size:25px">Ketua RW : Sriyono</p>
    <p style="font-size:25px">Pendamping : Anisa Pramudia Wardani</p>
    <p style="font-size:25px">Pokmas : Magersari 2</p>
    <p style="font-size:25px">Koordinat : -7.490471,110.219564</p>
    <p style="font-size:25px">Jumlah : 34</p>
    <p style="font-size:25px">This is a paragraph.</p>
    <h4>This is heading 4</h4>
    <h5>This is heading 5</h5>
    <h6>This is heading 6</h6>

    <p><b>Tip:</b> Use h1 to h6 elements only for headings. Do not use them just to make text bold or big. Use other
        tags for that.</p>
    <p style="font-size:25px">Ketua RT : Sutrasno</p>
    <p style="font-size:25px">Ketua RW : Sriyono</p>
    <p style="font-size:25px">Pendamping : Anisa Pramudia Wardani</p>
    <p style="font-size:25px">Pokmas : Magersari 2</p>
    <p style="font-size:25px">Koordinat : -7.490471,110.219564</p>
    <p style="font-size:25px">Jumlah : 34</p>
    <p style="font-size:25px">This is a paragraph.</p>
    <h4>This is heading 4</h4>
    <h5>This is heading 5</h5>
    <h6>This is heading 6</h6>

    <p><b>Tip:</b> Use h1 to h6 elements only for headings. Do not use them just to make text bold or big. Use other
        tags for that.</p>
    <div class="form-group">
        <a href="/dashboard/profil/create" class="btn btn-primary">Lengkapi Profil</a>
        <a href="/dashboard/profil/edit" class="btn btn-warning">Edit</a>
    </div>
@endsection
