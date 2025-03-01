<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;

class StudentController extends Controller
{

    public function index(Request $request){
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');
    
        $query = Student::query();
    
        //Filtering logic
        if ($request->has('college_id') && $request->college_id != '') {
            $query->where('college_id', $request->college_id);
        }
        
        //Sorting logic
        if ($request->has('sort') && $request->sort == 'desc') {
            $query->orderBy('name', 'desc');
        } else {
            $query->orderBy('name', 'asc');
        }
    
        $students = $query->get();
    
        return view('students.index', compact('students', 'colleges'));
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
            'phone' => 'required|digits_between:8,12',
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
