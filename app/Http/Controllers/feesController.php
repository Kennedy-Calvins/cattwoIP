<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class FeesController extends Controller
{
    // public function view()
    // {
    //     return view('Kennedy.fees');
    // }

    public function schoolFee(Request $request)

    {
        $validatedData = $request->validate([
            'stno' => 'required|integer',
            'name' => 'required|string',
            'dop' => 'required|date|before_or_equal:today',
            'fee' => 'required|integer ',
        ]);

        $student = Student::where('st_id', request('stno'))->where('fname', request('name'))->get();

        if(count($student) == 0)
        {
            return redirect('/fee')->withFail('Sorry!The student is not registered/Re-enter the correct details!');   
        }
        else
        {
            $fee = new Fees();

        $fee->st_id=request('stno');
        $fee->fname=request('name');
        $fee->dop=request('dop');
        $fee->amount=request('fee');

        // $student->date=request('updated_at');

            $fee->save();
            return redirect('/')->withSuccess('Fees Successfully Credited!');
        }    
    }


    public function allstudentfees()
    {
        $total = Fees::all()->sum('amount');

        $fee = Fees::all();
        return view('Kennedy.allstudentfees', ['fee' => $fee], ['amount' => $total]);
    }


    public function individualfees($id)
    {
        $total = Fees::all()->where('st_id', '=' , $id)->sum('amount');

        $fee = Fees::all()->where('st_id', '=' , $id);
        return view('Kennedy.individualfees', ['fee' => $fee], ['amount' => $total]);
    }

    //Search

    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'Student_Number' => 'required|integer',
        ]);

        $fee = Fees::all()->where('studentnumber',  request('Student_Number'));
        if(count($fee) > 0)
        {
            return view('Kennedy.individualfees', ['fee' => $fee]);
        }
        else
        {
            return redirect('/')->withFail('No such record exists');  
        }
        
    }
    public function indexes1(){

        $allstudentsfees = Fees::all();
        return view('Kennedy.allstudentsfees',['allstudentsfees' => $allstudentsfees]);
    }

    public function indexes(){
        //return(request('sno'));
        $allstudentsfees = Fees::all()->where('st_id',  request('sno'));
        return view('Kennedy.allstudentsfees',['allstudentsfees' => $allstudentsfees]); 
    }



    

}