<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test to check if admin can search another existing user in database
     *
     * @return void
     */
    public function test_search_existing_user_for_admin_will_render_user_management_page()
    {
        $user = User::factory()->create();
        $user->is_admin = 1;

        // Arrange
        $route = route('user-management');

        $requestBody = [
            'search' => $user->name
        ];

        $response = $this->actingAs($user)->get($route, $requestBody);

        $response->assertSee($requestBody['search']);
        $response->assertStatus(200);
        $response->assertSessionHasNoErrors();
    }

    /**
     * Test to check if admin can search another existing user in database
     *
     * @return void
     */
    public function test_search_non_existing_user_for_admin_will_render_the_page_and_result_is_empty()
    {
        $user = User::factory()->create();
        $user->is_admin = 1;

        $route = route('user-management');

        $requestBody = [
            'search' => 'Ryo'
        ];

        $response = $this->actingAs($user)->get($route, $requestBody);

        $response->assertDontSee($requestBody['search']);
        $response->assertStatus(200);
        $response->assertSessionHasNoErrors();
    }

    /**
     * Test to check if user cannot open user management page
     *
     * @return void
     */
    public function test_redirect_user_management_page_for_user()
    {
        $user = User::factory()->create();
        $user->is_admin = 0;

        $route = route('user-management');

        $requestBody = [
            'search' => $user->name
        ];

        $response = $this->actingAs($user)->get($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
    }
}
