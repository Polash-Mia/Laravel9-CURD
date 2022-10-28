<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $student,$students;
  public function index()
  {

    $this->students = Student::all();
    return view('student-list',['students'=>$this->students]);
  }
  public function create()
  {
    return view('student-create');
  }
  public function saveStudent(Request $request)
  {
    $request->validate([
      'name'=>'required',
      'email'=>'required',
      'mobile'=>'required',
      'address'=>'required',
      'image'=>'required',
    ]);

    Student::newStudent($request);
    return redirect('/create-student')->with('message','student create successfully');

  }

  public function detail($id)
  {

    $this->student=Student::find($id);
    return view('student-detail',['student'=>$this->student]);
  }

  public function edit($id)
  {

    $this->student =Student::find($id);
    return view('student-edit',['student'=>$this->student]);
  }

  public function update(Request $request,$id)
  {
    Student ::updateStudent($request,$id);
    return redirect('/')->with('message','Student update Successfully');

  }

  public function delete(Request $request,$id)
  {
    Student::deleteStudent($id);
    return redirect('/')->with('message','Student Info Delete ');

  }
}
