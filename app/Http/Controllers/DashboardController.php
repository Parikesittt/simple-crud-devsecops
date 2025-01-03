<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::query()->orderBy('created_at', 'DESC')->get();

        $data = [
            'title' => 'Create Student',
            'students' => $students,
        ];

        return view('dashboard', compact('students'));
    }
}
