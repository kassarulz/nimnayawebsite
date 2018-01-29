<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz_questions;

class ExamController extends Controller
{
    public function submit(Request $request){
    	
    	//create new msg
    	$quiz = new Quiz_questions;
    	$quiz->chapterid = $request->input('chapterid');
    	$quiz->question = $request->input('question');
    	$quiz->answer1 = $request->input('answer1');
    	$quiz->answer2 = $request->input('answer2');
    	$quiz->answer3 = $request->input('answer3');
    	$quiz->answer4 = $request->input('answer4');
    	$quiz->correctanswer = $request->input('correctanswer');
    	//save msg
    	$quiz->save();
    	//redirect
    	return redirect('/addexam')->with('success','question added successfully!');
    }
}
