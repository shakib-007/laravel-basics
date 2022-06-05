<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function studentList()
    {
        $student =  new Student();
        
        $student->name = 'fahim';
        $student->age = 22;
        $student->city = 'dhaka';
        $student->country = 'bangladesh';
        $student->save();

        $student1 =  new Student();
       
        $student1->name = 'shakib';
        $student1->age = 22;
        $student1->city = 'dhaka';
        $student1->country = 'bangladesh';
        $student1->save();
        
    }

    public function add()
    {
        return view('addStudent');
    }

    public function show()
    {
        $students = Student::all();
        return view('showStudent', compact('students'));
        
    }
    public function store(Request $req)
    {
        $students =  new Student();
        $students -> name = $req -> name;
        $students -> age = $req -> age;
        $students -> city = $req -> city;
        $students -> country = $req -> country;
        $students -> save();
        return redirect('show');
    }

    public function edit($id)
    {
       return view('editStudent', compact('id'));
    }

    public function update(Request $request , $id)
    {
        $student = Student::find($id);
        $student -> name = $request -> name;
        $student -> age = $request -> age;
        $student -> city = $request -> city;
        $student -> country = $request -> country;
        $student -> save();
        //dd($student);
        return redirect('show');
    }

    public function delete($id)
    {
       
        $student = Student::find($id);
        $student->delete();
        return redirect('show');
    }
}
