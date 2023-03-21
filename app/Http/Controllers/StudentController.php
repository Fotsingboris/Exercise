<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'option' => 'required',
            'matricule' => 'required',
            'level' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')
            ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('students.edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            
        ]);
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success','Student Deleted Successfully');
    }
}
