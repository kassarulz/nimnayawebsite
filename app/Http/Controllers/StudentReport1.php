<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Subject;
use PDF;
use Auth;
//use Auth;


class StudentReport1 extends Controller
{  

public function reportPdfsS1()   
{   
  //$users = Auth::user();
  /* $users = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
            ->join('marks','subjects.user_id','=','subjects.user_id')
            ->select('users.*','subjects.*','marks.*')
            ->get();*/
   //$pdf  = PDF::loadview('StudentReport2', ['users' => $users]);
   //$pdf  = PDF::loadview('reports', ['users' => $users],['subjects' => $subjects]); 
   // $pdf  = PDF::loadview('reports', ['subjects' => $subjects]); 

   //$pdf  = PDF::loadview('studentReport1',array('user'=>Auth::user()));
/*$subject1 =DB::table('subjects')

              ->Select('subject_name')*/
            $subject1  = DB::table('users')
                       ->join('subjects','users.id','=','subjects.user_id')
                       ->where('user_id','=',Auth::user()->id)
                       ->get();
    $pdf  = PDF::loadview('StudentReport1', ['subject1' => $subject1]);
    return $pdf->download('StdentReport1.pdf');
}

  
  public function reportS1()
    {//$users = DB::table('users')->get();
    //$subjects = DB::table('subjects')->get();
       // $users = DB::table('users')->get();
    	/*$users = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
            ->join('marks','subjects.user_id','=','subjects.user_id')
            ->select('users.*','subjects.*','marks.*')
            ->get();*/
             
// echo Auth::user()->id;
/*$subject1 =DB::table('subjects')
              ->Select('subject_name')*/
              //->Select('subject_id')
             

            $subject1  = DB::table('users')
                 ->join('subjects','users.id','=','subjects.user_id')
                 ->where('user_id','=',Auth::user()->id)
                 ->get();
              //echo $subject1;
               return view('StudentReport1', ['subject1' => $subject1]);

              


   
       //->join('subjects','users.id','=','subjects.user_id')
       //->select('users.*','subjects.*','marks.*')
            //->get();

    //$subject = Subject::all();
       // return $subject;
        //return view('studentReport1', ['users' => $users]);/*return view('profile',array('users'=>Auth::reportS1()));*/
           // return view('studentReport1',array('user'=>Auth::user()));



//*****************************************************
            //***************************************************************
                    //******************************************************************
           /* $ABC = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
            ->join('marks','subjects.user_id','=','subjects.user_id')
            ->select('users.*','subjects.*','marks.*')
            ->get();
             

    //$subject = Subject::all();
       // return $subject;
        return view('StudentReport2', ['users' => $ABC]);*/

       /* $use = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
            ->join('marks','subjects.user_id','=','subjects.user_id')
            ->select('users.*','subjects.*','marks.*')
            ->get();
             

    //$subject = Subject::all();
       // return $subject;
        return view('StudentReport2', ['use' => $use]);*/









	}   
}





