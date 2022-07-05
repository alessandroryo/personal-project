<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use App\Models\Assessment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReportTest extends TestCase
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
        $this->assertEquals($assessment->predicate(), 'A');
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
        $this->assertEquals($assessment->predicate(), 'B');
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
        $this->assertEquals($assessment->predicate(), 'C');
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
        $this->assertEquals($assessment->predicate(), 'D');
    }
}
