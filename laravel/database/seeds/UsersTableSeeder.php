<?php

use Illuminate\Database\Seeder;
use App\User;

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
        factory(User::class)->create([
            'name' => 'fujie',
            'email' => 'fujie@lagoon.jp',
            'gender' => 1,
            'location' => 1,
            'job' => 2,
            'industry' => 11,
            'admin' => true,
        ]);
        factory(User::class, 99)->create();
    }
}
