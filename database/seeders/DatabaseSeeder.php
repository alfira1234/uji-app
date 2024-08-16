<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\fasilitas;
use App\Models\jenis;
use App\Models\Jns_mpp;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Usia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Post::factory(5)->create();

        // fasilitas::factory(3)->create();

        jenis::create([
            'jenis' => 'Paket Keluarga'
        ]);

        jenis::create([
            'jenis' => 'Paket Pelajar'
        ]);

        jenis::create([
            'jenis' => 'Paket Personal'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::create([
        //     'tgl_datang' => '2023/10/17',
        //     'jm_datang' => '08:00:00',
        //     'jml_org' => '10',
        //     'nam_leng' => 'Anastasya',
        //     'email' => 'anastasya@gmail.com',
        //     'no_tlp' => '0875658696',
        //     'askot' => 'Magelang',
        //     'asne'=> 'Indonesia',
        //     'ket_tam' => 'Tidak ada'
        // ]);


        //Jenis Mata Pencaharian
        Jns_mpp::create([
            'jns_mpp' => 'IRT'
        ]);

        Jns_mpp::create([
            'jns_mpp' => 'Pelajar'
        ]);

        Jns_mpp::create([
            'jns_mpp' => 'Blm/Tdk Bekerja'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Pedagang'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Wiraswasta'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'BUMN'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Petani/Peternak'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Buruh tani'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Pengacara'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'PNS'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'TNI'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Bidan'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Montir'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Pensiunan'
        ]);
        Jns_mpp::create([
            'jns_mpp' => 'Lainnya'
        ]);

        //Usia
        usia::create([
            'usia' => '0-1'
        ]);
        usia::create([
            'usia' => '1-5'
        ]);
        usia::create([
            'usia' => '6-10'
        ]);
        usia::create([
            'usia' => '11-15'
        ]);
        usia::create([
            'usia' => '16-20'
        ]);
        usia::create([
            'usia' => '21-25'
        ]);
        usia::create([
            'usia' => '26-30'
        ]);
        usia::create([
            'usia' => '31-35'
        ]);
        usia::create([
            'usia' => '36-40'
        ]);
        usia::create([
            'usia' => '41-45'
        ]);
        Usia::create([
            'usia' => '46-50'
        ]);
        usia::create([
            'usia' => '51-55'
        ]);
        usia::create([
            'usia' => '56-60'
        ]);

// email : alfira0@gmail.com
// pw : @alfira26

User::create([
        'name' => 'Al Fira Nisa Fadhilah',
        'email' => 'alfira0@gmail,com',
        'username' => 'geminigurl',
        'password' => '@alfira26',
]);

    }
}
