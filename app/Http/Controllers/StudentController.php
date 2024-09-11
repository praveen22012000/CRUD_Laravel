<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('create_student');
    }

    public function store(Request $request)
    {
        $name=$request->input('name');
        $age=$request->input('age');
        $phone=$request->input('phone');

        $student=new Student;

        $student->name=$name;
        $student->age=$age;
        $student->phone=$phone;

        $student->save();

       // return redirect('/')->with('message',"Student has been successfully created! Student ID is".$student->id);

        return "Student has been successfully created! Student ID is".$student->id;

    }

    public function list()
    {
        $students=Student::all();
        return view('list_student',['students'=>$students]);
    }

    public function edit($id)
    {
        $student=Student::find($id);
        return view('edit_student',['student'=>$student]);

    }

    public function update(Request $request,$id)
    {
        $student=Student::find($id);

        
        $student->name=$request->input('name');
        $student->age=$request->input('age');
        $student->phone=$request->input('phone');

        $student->save();

        return 'Student updated successfully! <a href="'.url('list').'">Click here to see list</a>';
    }

    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        return 'User Deleted Successfully! <a href="'.url('list').'">Click here to see list</a>';
    }
}
