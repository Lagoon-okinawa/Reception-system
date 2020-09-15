<?php

use Illuminate\Database\Seeder;
use App\History;


class HistoriesTable extends Seeder
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
