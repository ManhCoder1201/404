<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users') ->insert([
            'name'=>'manh1',
            'email'=>'manh1',
            'password'=>hash::make('manh1'),
            'role'=>'admin',
        ]);
        DB::table('users') ->insert([
            'name'=>'manh1',
            'email'=>'manh@gmail.com',
            'password'=>hash::make('manh123'),
            'role'=>'admin',
        ]);
    }
}
