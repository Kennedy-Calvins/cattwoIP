<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Student;

class studentsController extends Controller
{

    //Validation method

    public function registerstudent()
{
    // $validateData = $request->validate(['stno' => 'required|integer|unique:student,st_id',
    // 'name' => 'required|string|unique:student,fname',
    // 'dobh' => 'required|date|before:today',
    // 'address' => 'required|string',]);
      

        $student = new Student;

        // return (request('stno'));

        $student->st_id=request('stno');
        $student->fname=request('name');
        $student->dob=request('dobh');
        $student->address=request('add');
        
        


        $student->save();
        return redirect('/')->withSuccess('Confirmed! Student succesfully added');
    }

    public function index(){

        $allstudents = Student::all();
        return view('Kennedy.allstudents',['allstudents' => $allstudents]);
    }


   


}

?>
