<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'tipe_akun' => 'adm',
            'remember_token' => Str::random(10),
        ]);
    }
}
