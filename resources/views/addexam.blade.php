
@extends('layouts.app')
@section('content')
<br>
<center><div class="panel panel-default" style="width: 800px; height: 2000px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h1 ><span class="glyphicon glyphicon-list-alt"></span> Add exam</h1>
<div class="panel-body">
{!! Form::open(['url' => 'addexam/submit']) !!}
    <div class="form-group" align="left">
        {{Form::label('chapterid', 'chapter number')}}
        {{Form::text('chapterid','',['class'=>'form-control','placeholder'=> 'Enter chapter number'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('question', 'question')}}
        {{Form::text('question', '',['class'=>'form-control','placeholder'=> 'Enter question'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('answer1', 'Answer 1')}}
        {{Form::textarea('answer1', '',['class'=>'form-control','placeholder'=> 'Enter first answer'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('answer2', 'Answer 2')}}
        {{Form::textarea('answer2', '',['class'=>'form-control','placeholder'=> 'Enter second answer'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('answer3', 'Answer 3')}}
        {{Form::textarea('answer3', '',['class'=>'form-control','placeholder'=> 'Enter third answer'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('answer4', 'Answer 4')}}
        {{Form::textarea('answer4', '',['class'=>'form-control','placeholder'=> 'Enter forth answer'])}}
    </div>
    <div class="form-group" align="left">
        {{Form::label('correctanswer', 'Correct Answer')}}
        {{Form::textarea('correctanswer', '',['class'=>'form-control','placeholder'=> 'Enter the correct answer'])}}
    </div>
    <div>
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        <div>
 <a href='{!! url('/homepage'); !!}' class="pull-right btn btn-primary">Finish Exam</a> 
</div>
    </div>
    </div>
    </div>



</center>


@endsection