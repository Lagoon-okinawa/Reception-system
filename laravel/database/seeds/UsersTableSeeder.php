<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'name' => 'fujie',
            'email' => 'fujie@lagoon.jp',
            'password' => Hash::make('password'),
            'gender' => 1,
            'location' => 1,
            'job' => 2,
            'industory' => 11,
            'admin' => false,
        ];
        DB::table('users')->insert($param);
    }
}
