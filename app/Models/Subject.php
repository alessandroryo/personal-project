<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function assessments() {
        return $this->hasMany(Assessment::class);
    }

    public function report() {
        return $this->belongsTo(Report::class);
    }

    public function average() {
        $assessments = $this->assessments();

        if ($assessments->count() == 0) return 0;

        $total = 0;

        foreach($assessments->get() as $assessment) {
            $total += $assessment->score;
        }
        return round($total / $assessments->count(),1);
    }

    public function competence($subject) {
        if ($subject->average() >= 93 && $subject->average() <= 100) {
            return 'Very Competent';
        } else if ($subject->average() >= 85 && $subject->average() <= 92) {
            return 'Competent';
        } else if ($subject->average() >= $subject->passing_grade && $subject->average() <= 84) {
            return 'Less Competent';
        } else {
            return 'Not Competent';
        }
    }

    public function isPassed() {
        return $this->average() > $this->passing_grade;
    }
}
