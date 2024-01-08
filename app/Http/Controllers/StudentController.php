<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\UpdateStudentRequest;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Student',
        ];

        return view('students.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:60',
            'email' => 'required|email',
            'mobile_number' => 'required|min:11|max:11',
            'section' => 'required',
            'course' => 'required',
            'profile_image' => 'image|nullable',
        ]);

        //Generate Custom ID
        $id = IdGenerator::generate([
            'table' => 'students',
            'length' => 14,
            'prefix' => 'SID-' . date('m') . date('d') . date('y'),
        ]);

        if (request()->has('profile_image')) {
            $image_path = request()->file('profile_image')->store('images/student-profile-images', 'public');
            $validated['profile_image'] = $image_path;
        }

        if (!$validated) {
            return redirect('students.create');
        }

        $validated['id'] = $id;
        Student::create($validated);
        return redirect()->route('dashboard')->with('success', 'Student Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $data = [
            'title' => 'Edit Student',
            'student' => $student,
        ];

        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Student $student)
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:60',
            'email' => 'required|email',
            'mobile_number' => 'required|min:11|max:11',
            'section' => 'required',
            'course' => 'required',
            'profile_image' => 'image|nullable',
        ]);

        if (request()->has('profile_image')) {
            $image_path = request()->file('profile_image')->store('images/student-profile-images', 'public');
            $validated['profile_image'] = $image_path;

            Storage::disk('public')->delete($student->image ?? '');
        }

        if (!$validated) {
            return redirect('students.edit');
        }

        $student->update($validated);

        return redirect()->route('dashboard')->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('dashboard')->with('success', 'Student deleted!');
    }
}
