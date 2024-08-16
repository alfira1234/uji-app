@extends('layouts.main')

@section('navbar')
<h1> halaman create</h1>  

{{-- <img src="img/{{ $image }}" alt="{{ $judul }}">
<h3>{{ $judul }}</h3>
<p>{{ $deskripsi }}</p> --}}



{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesan Sekarang') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('post.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')

                        <div>
                            <x-input-label for="tgl_datang" :value="__('Tanggal Kedatangan')" />
                            <x-text-input id="tgl_datang" name="tgl_datang" type="date" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('tgl_datang')" />
                        </div>

                        <div>
                            <x-input-label for="jm_datang" :value="__('Jam Kedatangan')" />
                            <x-text-input id="jm_datang" name="jm_datang" type="time" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('jm_datang')" />
                        </div>

                        <div>
                            <x-input-label for="jml_org" :value="__('Jumlah Orang')" />
                            <x-text-input id="jml_org" name="jml_org" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('jml_org')" />
                        </div>

                        <div>
                            <x-input-label for="nam_leng" :value="__('Nama Lengkap')" />
                            <x-text-input id="nam_leng" name="nam_leng" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('nam_leng')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div>
                            <x-input-label for="no_tlp" :value="__('No Telepon')" />
                            <x-text-input id="no_tlp" name="no_tlp" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('no_tlp')" />
                        </div>
                
                        <div>
                            <x-input-label for="askot" :value="__('Kota Asal')" />
                            <x-text-input id="askot" name="askot" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('askot')" />
                        </div>
                
                        <div>
                            <x-input-label for="asne" :value="__('Negara Asal')" />
                            <x-text-input id="asne" name="asne" type="text" class="mt-1 block w-full"  required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('asne')" />
                        </div>

                        <div>
                            <x-input-label for="ket_tam" :value="__('Keterangan Tambahan')" />
                            <x-text-input id="ket_tam" name="ket_tam" type="text" class="mt-1 block w-full" required autofocus  />
                            <x-input-error class="mt-2" :messages="$errors->get('ket_tam')" />
                        </div>
                
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Kirim Order') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- </x-app-layout> --}}


@endsection
