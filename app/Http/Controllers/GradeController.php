<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Grade;

class GradeController extends Controller
{
 public function submit(Request $request){
    	
    	//create new grade
    	$grade = new Grade;
    	$grade->grade = $request->input('grade');
   
    	//save msg
    	$grade->save();
    	//redirect
    	return redirect('admin')->with('success','you have created grade successfully');
}

}
