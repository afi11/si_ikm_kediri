<?php

use Illuminate\Database\Seeder;

class KecamatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\kecamatan::create([
            'nama_kec' => 'Mojoroto',
            'is_deleted' => '0',
        ]);

        \App\kecamatan::create([
            'nama_kec' => 'Kota',
            'is_deleted' => '0',
        ]);

        \App\kecamatan::create([
            'nama_kec' => 'Pesantren',
            'is_deleted' => '0',
        ]);
    }
}
