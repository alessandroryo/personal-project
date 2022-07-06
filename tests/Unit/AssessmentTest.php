<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use App\Models\Assessment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssessmentTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_predicate_A()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create([
            'user_id' => $user->id
        ]);
        $subject = Subject::factory()->create([
            'report_id' => $report->id,
        ]);

        // Predicate A
        $assessment = Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'score' => 95
        ]);
        $this->assertEquals('A', $assessment->predicate());
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_predicate_B()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create([
            'user_id' => $user->id
        ]);
        $subject = Subject::factory()->create([
            'report_id' => $report->id,
        ]);
        // Predicate B
        $assessment = Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'score' => 85
        ]);
        $this->assertEquals('B', $assessment->predicate());
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_predicate_C()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create([
            'user_id' => $user->id
        ]);
        $subject = Subject::factory()->create([
            'report_id' => $report->id,
        ]);
        // Predicate C
        $assessment = Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'score' => 80
        ]);
        $this->assertEquals('C', $assessment->predicate());
    }

        /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_predicate_D()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create([
            'user_id' => $user->id
        ]);
        $subject = Subject::factory()->create([
            'report_id' => $report->id,
        ]);
        // Predicate D
        $assessment = Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'score' => 10
        ]);
        $this->assertEquals('D', $assessment->predicate());
    }
}
