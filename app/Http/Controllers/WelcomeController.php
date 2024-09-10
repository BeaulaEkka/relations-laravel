<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        // Fetch users with related phone and posts data
        $users = User::with(['phone', 'posts'])->get();

        // Fetch all students
        $students = Student::with('courses')->get();

        // Attach a course to each student
        foreach ($students as $student) {
            $student->courses()->attach([1, 2, 3], ['enrolled_at' => now()]);
        }

        //find one student
        // $student = Student::find(5);

        // Return the view with the users and students data
        return view('welcome', compact('users', 'students'));
    }
}
