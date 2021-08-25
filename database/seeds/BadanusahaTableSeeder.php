<?php

use Illuminate\Database\Seeder;

class BadanusahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\badanusaha::create([
            'nama_badan_usaha' => 'UD',
            'is_deleted' => '0',
        ]);

        \App\badanusaha::create([
            'nama_badan_usaha' => 'CV',
            'is_deleted' => '0',
        ]);

        \App\badanusaha::create([
            'nama_badan_usaha' => 'PT',
            'is_deleted' => '0',
        ]);
    }
}
