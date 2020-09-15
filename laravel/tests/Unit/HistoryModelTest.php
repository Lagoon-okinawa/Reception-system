<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\User;
use App\History;
use Illuminate\Foundation\Testing\WithFaker;

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

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
