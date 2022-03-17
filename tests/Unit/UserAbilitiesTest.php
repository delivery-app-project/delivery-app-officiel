<?php

namespace Tests\Unit;

use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserAbilitiesTest extends TestCase
{
    use DatabaseMigrations ;
    // use DatabaseTransactions; 

    public function test_abilities_userAbilitiesTest(){

            $this->seed(DatabaseSeeder::class);

            $user = User::where("email","user@test.com")->get()->first();
            
            // dd($user->abilities());
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
}
