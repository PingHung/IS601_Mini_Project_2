<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::all()->last();
        $email = $user->email;
        $user->delete();

        $this->assertDatabaseMissing('users', [$email]);

    }
}
