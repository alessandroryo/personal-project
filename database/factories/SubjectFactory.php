<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'subject_name' => $this->faker->randomElement([
                'Religion and Moral Education',
                'Five Principles and Civics Education',
                'Indonesia',
                'Mathematics',
                'History of Indonesia',
                'English',
                'Arts and Culture',
                'Physical, Sports, and Health Education',
                'Craft and Entrepreneurship',
                'Mathematics (Optional)',
                'Biology',
                'Physics',
                'Chemistry',
                'Economics',
                'German',
                'Scientific Research'
            ]),
            'passing_grade' => 77,
        ];
    }
}
