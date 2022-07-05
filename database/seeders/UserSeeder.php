<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->has(Report::factory(1)->has(Subject::factory(random_int(3, 5))->has(Assessment::factory(2), 'assessments'), 'subjects'), 'reports')->create();
    }
}
