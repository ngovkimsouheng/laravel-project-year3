<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('sid')->paginate(5);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added.');
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact("student"));
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $request->validate(['name' => 'required']);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    public function destroy(Request $request, string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }
}
