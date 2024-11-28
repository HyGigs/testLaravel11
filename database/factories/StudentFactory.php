<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {

        $grade = Grade::inRandomOrder()->first();

        return [
            'nama' => $this->faker->name(),
            'grade_id' => $grade->id,
            'department_id' => $grade->department_id,
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address(),
        ];
    }
}
