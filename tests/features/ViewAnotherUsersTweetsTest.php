<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 15/02/16
 * Time: 19:34
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewAnotherUsersTweetsTest extends TestCase
{

    public function testViewingAnotherUsersTweets()
    {
        $user = factory(User::class)->create(['username' => 'johndoe']);
        $tweet = factory(Tweet::class)->make(['body' => 'My first tweet']);
        $user->tweets()->SAVE($tweet);

        $this->visit('/johndoe')
            ->see('My first tweet');
    }
}