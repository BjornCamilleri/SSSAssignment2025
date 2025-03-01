<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{

    public function index(){
        $students = Student::orderBy('name')->pluck('name', 'id')->prepend('All Students', '');
        if (request('student_id') == null){
            $students= Student::orderBy('name')->get();
        } else{
            $students = Student::where('student_id', request('student_id'))->get();
        }
        return view('students.index', compact('students'));
    }

    public function create(){
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('Select College', '');
        return view('students.create', compact('colleges'));
    }

    public function store(Request $request) {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits_between:1,12',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id'
        ]);
 
        Student::create($request->all());
        return redirect()->route('students.index')->with('message', 'Student has been added successfully!');
    }

    public function edit($id) {
        $student = Student::find($id);
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('Select College', '');
        return view('students.edit', compact('student', 'colleges'));
    }

    public function editstorage(Request $request, $id) {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits_between:1,12',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id'
        ]);
 
        Student::where('id', $id)->update($request->only(['name', 'email', 'phone', 'dob', 'college_id']));
        return redirect()->route('students.index')->with('message', 'Student has been updated successfully!');
    }

    public function destroy($id) {
        Student::destroy($id);
        return redirect()->route('students.index')->with('message', 'Student has been deleted successfully!');
    }





    







    

}
