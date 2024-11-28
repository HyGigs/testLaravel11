<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'PPLG', 'classCount' => 2],
            ['name' => 'Animasi 3D', 'classCount' => 3],
            ['name' => 'Animasi 2D', 'classCount' => 2],
            ['name' => 'DKV Desain Grafis', 'classCount' => 3],
            ['name' => 'DKV Teknik Grafika', 'classCount' => 2]
        ];

        $grades = [10, 11, 12];

        foreach ($departments as $departmentData) {
            // Create the department
            $department = Department::create([
                'nama' => $departmentData['name']
            ]);

            // For each grade and class, create the grade records
            foreach ($grades as $grade) {
                foreach (range(1, $departmentData['classCount']) as $classNumber) {
                    Grade::factory()->create([
                        'nama' => "{$grade} {$departmentData['name']} {$classNumber}",
                        'department_id' => $department->id
                    ]);
                }
            }
        }

        // Seed students
        Student::factory(100)->create();
    }
}
