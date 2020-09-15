<?php

use Illuminate\Database\Seeder;
use App\History;


class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(History::class, 200)->create();
    }
}
