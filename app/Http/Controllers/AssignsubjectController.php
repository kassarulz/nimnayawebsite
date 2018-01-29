<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssignSubject;

class AssignsubjectController extends Controller
{
    public function submit(Request $request){
    	
    	//create new msg
    	$subject = new AssignSubject;
    	$subject->subject = $request->input('subject');
    $subject->grade_id = $request->input('grade_id');
    	//save msg
    	$subject->save();
    	//redirect
    	return redirect('homepage')->with('success','you have assigned successfully');
}
public function getSubjects(){
        $subject = Subject::all();
        return view('subject')->with('subject_name',$subject);
    }
}
