<?php

use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Divisi::create([
        	'id' => 17,
        	'nama_departemen' => 'Administrator',
        ]);
    }
}
