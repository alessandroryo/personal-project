<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function predicate() {
        if ($this->score >= 93 && $this->score <= 100) {
            return 'A';
        } else if ($this->score >= 85 && $this->score <= 92) {
            return 'B';
        } else if ($this->score >= $this->subject->passing_grade && $this->score <= 84) {
            return 'C';
        } else {
            return 'D';
        }
    }
}
