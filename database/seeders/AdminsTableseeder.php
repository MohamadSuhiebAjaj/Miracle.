<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name'=>'rama',
            'email'=>'rama66@hotmal.com',
            'password'=> Hash::make('2213013'),
        ]);
    }
}
