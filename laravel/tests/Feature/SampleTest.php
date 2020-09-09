<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class SampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        User::create([
            'name' => 'sample',
            'email' => 'sample@user.com',
            'password' => 'password',
        ]);

        $this->assertEquals(1, User::where('name', 'sample')->count());
    }
}
