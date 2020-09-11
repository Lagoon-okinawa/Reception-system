<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;

class UserModelTest extends TestCase
{
    use RefreshDatabase;

    protected $user1;
    protected $user2;

    public function setUp(): void
    {
        parent::setUp();
        $this->user1 = factory(User::class)->create();
        $this->user2 = factory(User::class)->make();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testCreateUserSuccess_ユーザー登録ができる()
    {
        $this->assertCount(1, User::all());
    }

    public function testCreateUserFaild_名前が空の時()
    {
        try {
            $this->user1 = factory(User::class)->make();
            $this->user1->name = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_名前が21文字以上()
    {
        try {
            $this->user1->name = str_repeat('a', 21);
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_メールアドレスが空の時()
    {
        try {
            $this->user1->email = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_メールアドレスが重複する時()
    {
        try {
            $this->user2->email = $this->user1->email;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_性別が空の時()
    {
        try {
            $this->user1->gender = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_住居エリアが空の時()
    {
        try {
            $this->user1->location = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_職業が空の時()
    {
        try {
            $this->user1->job = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_職種が空の時()
    {
        try {
            $this->user1->industory = null;
            $this->user1->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }
}
