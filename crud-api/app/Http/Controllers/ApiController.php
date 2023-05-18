<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class ApiController extends Controller
{
    public function create(Request $request){
        $students = new Student();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();
        return response()->json($students);
    }

    public function viewStudent(){
        $students = Student::all();
        return response()->json($students);
    }
 
    public function viewStudentById($id){
        $student = Student::find($id);
        return response()->json($student);
    }

    public function updateStudentById(Request $request, $id){
        $student = Student::find($id);
        $student ->fname = $request->input('fname');
        $student ->lname = $request->input('lname');
        $student ->email = $request->input('email');
        $student ->password = $request->input('password');
        
        $student->save();
        return response()->json($student);
    }

    public function deleteStudentById($id){
        $student = Student::find($id);
        $student->delete();
        return response()->json("success");
    }

    public function deleteStudentByFname($Fname){
        $student = Student::where('Fname', $Fname)->first();
        $student->delete();
        return response()->json("delete by Fname success!");
    }
}
