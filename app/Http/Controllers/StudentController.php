<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::chunk('2', function($students){
            foreach($students as $student){
                echo $student;
            }
            echo "<br><br><br>";
        });
        exit();
    }

    public function addStudent(){
        return view('add');
    }

    public function storeStudent(Request $request){

        $data = array(
           'name'=> $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
        );
        Student::create($data);
        return redirect()->route('add.student');
    }

    public function show($id){
        $students = Student::findOrFail($id);
        echo $students;
    }
}
