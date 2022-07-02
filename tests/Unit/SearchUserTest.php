<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test to check if search query is working
     *
     * @return void
     */
    public function test_search_function_query_is_working()
    {
        User::create([
            'name' => 'Ryo',
            'email' => 'alessandroryo@gmail.com',
            'password' => 'AlessandroRyo#1'
        ]);

        User::create([
            'name' => 'Alessandro',
            'email' => 'anan0002@hz.nl',
            'password' => 'AlessandroRyo#1'
        ]);

        $users = User::all();

        $search = User::query()
            ->where('name', 'LIKE', "Ryo")
            ->orWhere('email', 'LIKE', "Ryo")
            ->get();

        $this->assertEquals($search[0]->name, $users[0]->name);
        $this->assertNotEquals($search[0]->name, $users[1]->name);
    }
}
