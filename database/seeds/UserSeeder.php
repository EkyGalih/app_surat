<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'nama_lengkap' => 'Administrator',
        	'divisi' => 'Administrator',
        	'divisi_id' => 17,
        	'username' => 'admin',
        	'password' => bcrypt('admin'),
        	'foto' =>  'upload/profile/profile.png',
        	'remember_token' => 'kWuxO3YYHmq4TD2629NffoEjVZ9wzhNbU98v1J4ba4VjmvvHDyy10uGJ6Jo8',
        ]);
    }
}
