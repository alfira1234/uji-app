@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="font-family: Cambria, serif; font-size:30px" class="text-center">Profil RT {{ auth()->user()->name }} Di
            Wilayah
            {{-- RW {{ $rw }}
            /RT {{ $rt }}
            Kelurahan {{ $profil->kelurahan }}
            Kecamatan {{ $profil->kecamatan }} </h1> --}}
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($profil as $item)
        @csrf

        {{-- <p style="font-size:25px">Ketua RT :{{ $item->ketua_rt }}</p> --}}
        <p style="font-family: Cambria, serif; font-size:25px"> Ketua Rt &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;
            {{ $item->ketua_rt }}
        <p style="font-family: Cambria, serif; font-size:25px"> Ketua Rw&emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;
            {{ $item->ketua_rw }}
        </p>
        <p style="font-family: Cambria, serif; font-size:25px"> Pendamping &emsp;&emsp;&emsp; : &emsp;
            {{ $item->pendamping }}
        </p>
        <p style="font-family: Cambria, serif; font-size:25px"> Pokmas &emsp;&emsp;&emsp;&emsp;&emsp; : &emsp;
            {{ $item->pokmas }}
        </p>
        <p style="font-family: Cambria, serif; font-size:25px"> Koordinat &emsp;&emsp;&emsp;&emsp; : &emsp;
            {{ $item->koordinat }}
        </p>
        <p style="font-family: Cambria, serif; font-size:25px"> Jumlah KK &emsp;&emsp;&emsp;&emsp; : &emsp;
            {{ $item->jml_kk }}
        </p>
        {{-- <p style="font-size:25px">Pendamping : Anisa Pramudia Wardani</p>
        <p style="font-size:25px">Pokmas : Magersari 2</p>
        <p style="font-size:25px">Koordinat : -7.490471,110.219564</p>
        <p style="font-size:25px">Jumlah : 34</p>
        <p style="font-size:25px">This is a paragraph.</p>
        <h4>This is heading 4</h4>
        <h5>This is heading 5</h5> --}}
        {{-- <h6>This is heading 6</h6> --}}

        <p><b>Tip:</b> Tampilan masih belum sempurna, masih terdapat beberapa perbaikan dalam tempilan.</p>
        @auth
            {{-- @if (session()->has('success')) --}}
            <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-warning btn-sm"><span><i
                        class="fa-solid fa-pen-to-square"></i></span>Edit</a>
            {{-- @endif --}}
        @endauth
    @endforeach
    <div class="form-group">

        {{-- @if (session()->has('success')) --}}
        <a href="{{ route('profil.create') }}">
            <button type="button" class="btn btn-primary">Lengkapi Profil</button>
        </a>
        {{-- @endif --}}

        {{-- @auth
            <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-warning btn-sm"><span><i
                        class="fa-solid fa-pen-to-square"></i></span>Edit</a>

        @endauth --}}


    </div>





    {{--
    <div class="form-group">
        @auth

            <a href="{{ route('profil.create') }}">
                <button type="button" class="btn btn-primary">Lengkapi Profil</button>
            </a>
        @endauth --}}

    {{-- <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-warning btn-sm"><span><i
                    class="fa-solid fa-pen-to-square"></i></span>Edit</a> --}}





    {{-- @if (session()->has('success'))
            <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-warning btn-sm"><span><i
                        class="fa-solid fa-pen-to-square"></i></span>Edit</a>
        @endif --}}








    {{-- <a href="/dashboard/profil/create" class="btn btn-primary">Lengkapi Profil</a> --}}
    {{-- <a href="/dashboard/profil/edit" class="btn btn-warning">Edit</a> --}}
    </div>
@endsection
