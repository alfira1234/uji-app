@extends('layouts.main')


@section('navbar')
    <h1> halaman tabel percobaan</h1>


    <table class="table table-striped">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama kegiatan</th>
                <th scope="col">Jenis kegiatan</th>
                <th scope="col">Jumlah anggaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>KEG 1</td>
                <td>JEN 1</td>
                <td>1.000.000</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Keg 1</td>
                <td>jen 2</td>
                <td>2.000.000</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Keg 2</td>
                <td>jen 1</td>
                <td>hskddh</td>
            </tr>
        </tbody>
    </table>
@endsection
