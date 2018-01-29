<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Subject;
use PDF;

class TeacherReport3 extends Controller  
{
   /* public function reportPdf(){
  // $pdf  = PDF::loadview('reports');
  // return $pdf->download('report.pdf',$users);
	$users = DB::table('users')->get();

 $pdf  = PDF::loadview('reports');

 //return $pdf->download('report.pdf', $users);
 return $pdf->download('report.pdf', ['users' => $users]);
   }*/
  /* public function reportPdf()
{
   $users = DB::table('users')->get();
   $pdf  = PDF::loadview('reports'); 


   return $pdf->download('report.pdf', ['users' => $users]);
}

 */
 public function reportPdfT3()
{
   $users = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
             //->join('marks','users.id','=','marks.user_id')
            //->join('marks','subjects.id','=','marks.subject_id')
            //->select('users.*','subjects.*','marks.*')
            ->get();
   $pdf  = PDF::loadview('TeacherReport3', ['users' => $users]);
   //$pdf  = PDF::loadview('reports', ['users' => $users],['subjects' => $subjects]); 
   // $pdf  = PDF::loadview('reports', ['subjects' => $subjects]); 
   

   return $pdf->download('TeacherReport3.pdf');
}

  public function reportT3()
    {//$users = DB::table('users')->get();
    //$subjects = DB::table('subjects')->get();
       // $users = DB::table('users')->get();
    	$users = DB::table('users')
            ->join('subjects','users.id','=','subjects.user_id')
            //->join('marks','users.id','=','marks.user_id')
            //->join('marks','users.id','=','marks.user_id')
            //->select('users.*','marks.*','subjects.*')
            ->get();
             

            // echo $data;

		//$subject = Subject::all();
       // return $subject;
       return view('TeacherReport3', ['users' => $users]);
	}
}





