<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Grade;
use App\Lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Note;
use Validator;
use Redirect;
use Notification;

class LessonController extends Controller
{
    public function submit(){
    	


    	$grade=Input::get('grade');
    	$lesson=Input::get('lesson');
    $file = Input::file('file');
    $video=Input::get('video');

    $rules  = array('file' =>'required|max:10000|mimes:doc,docx,pdf,jpeg,png,jpg' );
      $validator=Validator::make(Input::all(),$rules);
      if ($validator->fails()) {
      $messages=$validator->messages();

      return Redirect::to('lesson')->withInput()->withErrors(
        $validator);
      }
      elseif ($validator->passes()) {
        //echo "success validator";
if (Input::file('file')->isValid()) {
 $extension=Input::file('file')->getClientOriginalExtension();
 $filename = rand(11111,99999).'.'.$extension;


 $destinationPath = 'uploadednotes';


 $file->move($destinationPath, $filename);

 $data=array('grade'=>$grade,'lesson'=>$lesson,'file'=>$filename,'video'=>$video,);

Lesson::insert($data);
 return redirect('lesson')->with('success','lesson added successfully');

    
}
}
}
 public function lessons_to_grade($id)
    {

        $subjects = DB::select("select s.id,s.subject
                            from subjects s");

        return view('subjectsgrade')->with('subjects', $subjects)->with('grade', $id);
    }

 public function lessons_to_subject($sub, $id)
    {

        $lessons = DB::select("select l.lesson
                            from lessons l
                            where l.grade=$id and l.subject_id=$sub");

        $sub = DB::select("select s.id,s.subject
                            from subjects s
                            where s.id=$sub");

        return view('lesson/subject_chapters')->with('lessons', $lessons)->with('grade', $id)->with('sub', $sub);
    }

    public function lesson_chapter($chap, $grade, $sub)
    {

       // $chap = 'abc';

        $chapter = DB::select("select l.lesson,l.file,l.video
                            from lessons l
                            where l.grade=$grade and l.subject_id=$sub and l.lesson='$chap'");

        $sub = DB::select("select s.id,s.subject
                            from subjects s
                            where s.id=$sub");

        return view('lesson/lesson_chapter')->with('grade', $grade)->with('sub', $sub)->with('chapter', $chapter);
    }

    public function show_file($file_path)
    {
        return response()->file($file_path);
    }
}
   

