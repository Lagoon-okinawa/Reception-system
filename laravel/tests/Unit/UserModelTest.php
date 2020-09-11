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

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testCreateUserSuccess_ユーザー登録ができる()
    {
        factory(User::class)->create();
        $this->assertCount(1, User::all());
    }

    public function testCreateUserFaild_名前が空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->name = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_名前が21文字以上()
    {
        try {
            $user = factory(User::class)->make();
            $user->name = str_repeat('a', 21);
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_メールアドレスが空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->email = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_メールアドレスが重複する時()
    {
        try {
            $user1 = factory(User::class)->create();
            $user2 = factory(User::class)->make();
            $user2->email = $user1->email;
            $user2->save();
        } catch (\Throwable $th) {
            $this->assertCount(1, User::all());
        }
    }

    public function testCreateUserFaild_性別が空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->gender = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_住居エリアが空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->location = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_職業が空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->job = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

    public function testCreateUserFaild_職種が空の時()
    {
        try {
            $user = factory(User::class)->make();
            $user->industory = null;
            $user->save();
        } catch (\Throwable $th) {
            $this->assertCount(0, User::all());
        }
    }

}
