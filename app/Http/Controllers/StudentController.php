<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();

        return view('students.index', [
            'students' => $students
        ]);
    }

    //Show single student
    public function show(Student $student) 
    {
        return view('students.show', [
            'student' => $student
        ]);
    }

    // Show Create Form
    public function create() 
    {
        return view('students.create');
    }

    // Store Student 
    public function store(Request $request)
    {
        $studentForm = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'faculty' => 'required',
            'email' => ['required', 'email'],
            'finalgrade' => 'required',
        ]);

        Student::create($studentForm);

        return redirect('/');
    }

    // Show Edit Form
    public function edit(Student $student) 
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    // Update Student 
    public function update(Request $request, Student $student)
    {
        $studentForm = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'faculty' => 'required',
            'email' => ['required', 'email'],
            'finalgrade' => 'required',
        ]);

        $student->update($studentForm);

        return redirect('/');
    }

    // Delete Student
    public function destroy(Student $student) 
    {   
        $student->delete();

        return redirect('/');
    }
}
 