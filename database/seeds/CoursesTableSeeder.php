<?php

use Illuminate\Database\Seeder;
use App\Courses;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        $courses = [];
        $now = now();
        $counter = 1;

        $durations = [1.25, 1.5, 0.75, 2.0];
        $counts = [7, 5, 3, 5];

        for ($j = 0; $j < count($durations); $j++) {
            for ($i = 0; $i < $counts[$j]; $i++) {
                $courses[] = [
                    'title' => "Course Title {$counter}",
                    'description' => "Course description {$counter}",
                    'instructor' => "Instructor {$counter}",
                    'duration_hours' => $durations[$j],
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
                $counter++;
            }
        }

        Courses::insert($courses);
    }
}
