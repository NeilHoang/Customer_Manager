<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->save();
        return redirect()->route('student.index');
    }
    
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
    
    function edit($id)
    {
        $student = Student::findOrFail($id);
        return view("formEdit", compact("student"));
    }
    
    function update(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->save();
        return redirect()->route('student.index');
    }
}
