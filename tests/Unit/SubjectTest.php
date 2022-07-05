<?php

namespace Tests\Unit;

use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use App\Models\Assessment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubjectTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_very_competent()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        Assessment::factory()->for($subject)->create([
             'subject_id' => $subject->id,
             'test_type' => 'Skills',
             'score' => 90
        ]);
        Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 96
        ]);

        $this->assertTrue($subject->isPassed());
        $this->assertEquals('Very Competent', $subject->competence($subject));
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_competent()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        Assessment::factory()->for($subject)->create([
             'subject_id' => $subject->id,
             'test_type' => 'Skills',
             'score' => 90
        ]);
        Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 86
        ]);

        $this->assertTrue($subject->isPassed());
        $this->assertEquals('Competent', $subject->competence($subject));
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_passes_with_less_competent()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        Assessment::factory()->for($subject)->create([
             'subject_id' => $subject->id,
             'test_type' => 'Skills',
             'score' => 77
        ]);
        Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 80
        ]);

        $this->assertTrue($subject->isPassed());
        $this->assertEquals('Less Competent', $subject->competence($subject));
    }

        /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_that_subject_not_passes_with_not_competent()
    {
        $user = User::factory()->create([
            'name' => 'Ryo'
        ]);
        $report = Report::factory()->for($user)->create();
        $subject = Subject::factory()->for($report)->create();

        Assessment::factory()->for($subject)->create([
             'subject_id' => $subject->id,
             'test_type' => 'Skills',
             'score' => 50
        ]);
        Assessment::factory()->for($subject)->create([
            'subject_id' => $subject->id,
            'test_type' => 'Knowledge',
            'score' => 60
        ]);

        $this->assertFalse($subject->isPassed());
        $this->assertEquals('Not Competent', $subject->competence($subject));
    }
}
