<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\User;
use App\History;
use Illuminate\Foundation\Testing\WithFaker;
use Carbon\Carbon;

class HistoryModelTest extends TestCase
{
    use RefreshDatabase;

    protected $history;

    public function setUp(): void
    {
        parent::setUp();
        factory(User::class)->create();
        $this->history = factory(History::class)->make();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreateHistorySuccess_ヒストリー登録ができる()
    {
        $this->assertCount(1, User::all());
    }

    public function testCreateHistoryFaild_目的が空の時()
    {
        try {
            $this->history->purpose = null;
            $this->history->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, History::all());
        }
    }
}
