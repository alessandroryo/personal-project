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
    public function test_that_report_graduated()
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
        $this->assertEquals($report->graduated($report), 'Yes');
    }

        /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_report_not_graduated()
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
            'score' => 60
        ]);
        $this->assertEquals($report->graduated($report), 'No');
    }
}
