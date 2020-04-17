<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function Student(){
    	return view('student.create');
    }

    public function index(){
    	$student=Student::all();
    	return view('student.index',compact('student'));
    }


    public function string(Request $request){
    	 $validatedData = $request->validate([
    'name' => ['required', 'max:25' ,'min:4'],
    'phone' => ['required', 'unique:students', 'max:12' ,'min:9'],
    'email' => ['required', 'unique:students'],

    ]);

    	 $student= new Student;
    	 $student->name =$request->name;
    	 $student->email=$request->email;
    	 $student->phone=$request->phone;

    	 $student->save();
    	  $notification=array(
                'messege'=>'Successfully Student Inserted',
                'alert-type'=>'success'
            );
    	  return Redirect()->back()->with($notification);
    }

    public function show($id){
    	$student=Student::findorfail($id);

    	return view('student.show',compact('student'));
    	
    }

    public function destroy($id){
    	$student=Student::findorfail($id);
    	$student->delete();
    	 $notification=array(
                'messege'=>'Successfully Deleted',
                'alert-type'=>'success'
            );
    	  return Redirect()->back()->with($notification);
    }

    public function edit($id){
    	$student=Student::findorfail($id);

    	return view('student.edit',compact('student'));
    }
    public function update(REQUEST $request,$id){


    	$student=Student::findorfail($id);
    	$student->name=$request->name;
    	$student->email=$request->email;
    	$student->phone=$request->phone;

    	$student->save();
    	    	 $notification=array(
                'messege'=>'Successfully Updated',
                'alert-type'=>'info'
            );
    	  return Redirect()->route('all.student')->with($notification);
    }

}
