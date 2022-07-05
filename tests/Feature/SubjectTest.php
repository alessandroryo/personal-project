<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Report;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubjectTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_subject_with_the_right_term()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();

        $route = route('subjects.store', $report);
        $requestBody = [
            'report_id' => $report->id,
            'subject_name' => 'Mathematics',
            'passing_grade' => 77,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseCount('subjects', 1);
        $this->assertDatabaseHas('subjects', [
            'report_id' => $report->id,
            'subject_name' => 'Mathematics',
            'passing_grade' => 77,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_subject_with_passing_grade_exceeds_the_maximum_number()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();

        $route = route('subjects.store', $report);
        $requestBody = [
            'report_id' => $report->id,
            'subject_name' => 'Mathematics',
            'passing_grade' => 101,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['passing_grade']);
        $this->assertDatabaseCount('subjects', 0);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_subject_with_the_minus_passing_grade()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();

        $route = route('subjects.store', $report);
        $requestBody = [
            'report_id' => $report->id,
            'subject_name' => 'Mathematics',
            'passing_grade' => -1,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['passing_grade']);
        $this->assertDatabaseCount('subjects', 0);
    }
}
