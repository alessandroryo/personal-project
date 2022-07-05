<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_a_student_report_with_the_right_term()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $route = route('reports.store');
        $requestBody = [
            'user_id' => $user->id,
            'student_name' => 'Alessandro Javva',
            'student_class' => 'XII MIPA 2',
            'student_number' => 1,
            'school_year' => 2021,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseCount('reports', 1);
        $this->assertDatabaseHas('reports', [
            'student_name' => 'Alessandro Javva',
            'student_class' => 'XII MIPA 2',
            'student_number' => 1,
            'school_year' => 2021,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_a_student_report_with_student_number_exceeds_the_maximum_number()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $route = route('reports.store');
        $requestBody = [
            'user_id' => $user->id,
            'student_name' => 'Alessandro Javva',
            'student_class' => 'XII MIPA 2',
            'student_number' => 36,
            'school_year' => 2023,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['student_number', 'school_year']);
        $this->assertDatabaseCount('reports', 0);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_a_student_report_with_the_minus_student_number()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $route = route('reports.store');
        $requestBody = [
            'user_id' => $user->id,
            'student_name' => 'Alessandro Javva',
            'student_class' => 'XII MIPA 2',
            'student_number' => -1,
            'school_year' => 2023,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['student_number', 'school_year']);
        $this->assertDatabaseCount('reports', 0);
    }
}
