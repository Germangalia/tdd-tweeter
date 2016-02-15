<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 15/02/16
 * Time: 20:45
 */
class UserTest extends TestCase
{

    use DatabaseMigrations;

    public function testUserCanBeFoundByUsername()
    {
        $createdUser = factory(User::class)->create(['username' => 'janedoe']);

        $founduser = User::findByUsername('janedoe');

        $this->assertEquals($createdUser->id, $founduser->id);
        $this->assertEquals($createdUser->username, $founduser->username);
    }
}