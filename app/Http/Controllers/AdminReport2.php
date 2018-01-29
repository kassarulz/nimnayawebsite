<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Subject;
use PDF;

class AdminReport2 extends Controller  
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
 public function reportPdfA2()
{
   //$users = DB::table('users')
            //->join('subjects','users.id','=','subjects.user_id')
             //->join('marks','users.id','=','marks.user_id')
            //->join('marks','subjects.id','=','marks.subject_id')
            //->select('users.*','subjects.*','marks.*')
            //->get();
  // $pdf  = PDF::loadview('TeacherReport1', ['users' => $users]);
   $users = DB::table('users')->where('usertype',0)->get();          
   $pdf  = PDF::loadview('AdminReport2', ['users' => $users]);
   //$pdf  = PDF::loadview('reports', ['users' => $users],['subjects' => $subjects]); 
   // $pdf  = PDF::loadview('reports', ['subjects' => $subjects]); 
   

   return $pdf->download('AdminReport2.pdf');
}

  public function reportA2()
    {//$users = DB::table('users')->get();
    //$subjects = DB::table('subjects')->get();
       // $users = DB::table('users')->get();
    	//$users = DB::table('users')
            //->join('subjects','users.id','=','subjects.user_id')
            //->join('marks','users.id','=','marks.user_id')
           // ->join('marks','users.id','=','marks.user_id')
            //->select('users.*','marks.*','subjects.*')
           // ->get();
             $users = DB::table('users')->where('usertype',0)->get();    

            // echo $data;

    //$subject = Subject::all();
       // return $subject;
       return view('AdminReport2', ['users' => $users]);

            // echo $data;

		//$subject = Subject::all();
       // return $subject;
      // return view('AdminReport2', ['users' => $users]);
	}
}





