<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_name' => $this->faker->name(),
            'student_class' => $this->faker->randomElement([
                'X MIPA 1',
                'X MIPA 2',
                'X MIPA 3',
                'X MIPA 4',
                'X MIPA 5',
                'X MIPA 6',
                'XI MIPA 1',
                'XI MIPA 2',
                'XI MIPA 3',
                'XI MIPA 4',
                'XI MIPA 5',
                'XI MIPA 6',
                'XII MIPA 1',
                'XII MIPA 2',
                'XII MIPA 3',
                'XII MIPA 4',
                'XII MIPA 5',
                'XII MIPA 6',
        ]),
            'student_number' => $this->faker->numberBetween(0, 35),
            'school_year' => $this->faker->year()
        ];
    }
}
