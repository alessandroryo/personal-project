<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssessmentTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_assessment_with_the_right_term()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        $route = route('assessments.store', [$report, $subject]);
        $requestBody = [
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 90,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseCount('assessments', 1);
        $this->assertDatabaseHas('assessments', [
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 90,
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_assessment_with_passing_grade_exceeds_the_maximum_number_and_test_type_not_string()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        $route = route('assessments.store', [$report, $subject]);
        $requestBody = [
            'subject_id' => $subject->id,
            'test_type' => 1234,
            'score' => 101,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['test_type', 'score']);
        $this->assertDatabaseCount('assessments', 0);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_assessment_with_the_minus_score_and_test_type_not_string()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        $route = route('assessments.store', [$report, $subject]);
        $requestBody = [
            'subject_id' => $subject->id,
            'test_type' => 1234,
            'score' => -1,
        ];

        $response = $this->post($route, $requestBody);

        $response->assertSessionHasErrors(['test_type', 'score']);
        $this->assertDatabaseCount('assessments', 0);
    }
}
