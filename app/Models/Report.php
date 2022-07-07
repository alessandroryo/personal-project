<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function subjects() {
        return $this->hasMany(Subject::class);
    }
    public function average() {
        
        $subjects = $this->subjects();

        if ($subjects->count() == 0) return 0;

        $total = 0;

        foreach($subjects->get() as $subject) {
            $total += $subject->average();
        }
        return round($total / $subjects->count(),1);
    }

    public function graduated($report) {
        if ($report->average() >= 75 && $report->average() <= 100) {
            return 'Yes';
        } else {
            return 'No';
        }
    }
}
