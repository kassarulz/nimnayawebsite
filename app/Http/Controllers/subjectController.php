<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class subjectController extends Controller
{
    public function submit(Request $request){
    	
    	//create new msg
    	$subject = new Subject;
    	$subject->subject_name = $request->input('subject_name');
    $subject->grade_id = $request->input('grade_id');
    	//save msg
    	$subject->save();
    	//redirect
    	return redirect('viewsubjects')->with('success','you have created subject successfully');
}

  public function getSubjects(){
    	$subject = Subject::all()->where('grade_id','6');
    	return view('subjectsgrade6')->with('subject_name',$subject);
    }

     public function getSubjectsAll(){
        $subject = Subject::all();
        
          return view('viewsubjects',['subject'=>$subject]);
    }
     public function delete($id){
      $subject = Subject::find($id);

      $subject->delete();
      return redirect()->back();
    }
    public function update($id)
    {
        $subject = Subject::find($id);
        return view('editsubject')->with('subject',$subject);
    }
    public function save(Request $request,$id)
    {
         $subject = Subject::find($id);
         $subject->subject_name =$request->subject_name;
         $subject->grade_id=$request->grade_id;
         $subject->save();

          return redirect('viewsubjects')->with('success','updated successfully');

    }

    

}