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

    public function testCreateUserFailed_名前が空の時()
    {
        try {
            $this->user2->name = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_名前が21文字以上()
    {
        try {
            $this->user2->name = str_repeat('a', 21);
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_メールアドレスが空の時()
    {
        try {
            $this->user2->email = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_メールアドレスが重複する時()
    {
        try {
            $this->user2->email = $this->user1->email;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_性別が空の時()
    {
        try {
            $this->user2->gender = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_住居エリアが空の時()
    {
        try {
            $this->user2->location = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_職業が空の時()
    {
        try {
            $this->user2->job = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFailed_職種が空の時()
    {
        try {
            $this->user2->industry = null;
            $this->user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }
}
