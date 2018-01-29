@extends('layouts.app')
@section('content')
<br>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 400px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h1 ><span class="glyphicon glyphicon-phone-alt"></span> Add subject</h1>
<div class="panel-body">
{!! Form::open(['url' => 'createsubject/submit']) !!}
    <div class="form-group" align="left">
    	{{Form::label('subject_name', 'subject name')}}
    	{{Form::text('subject_name','',['class'=>'form-control','placeholder'=> 'Enter subject name'])}}
    </div>
    <div class="form-group" align="left">
    	{{Form::label('grade_id', 'Enter grade')}}
    	{{Form::text('grade_id', '',['class'=>'form-control','placeholder'=> 'Enter grade'])}}
    </div>

{{Form::submit('submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
    </div>
    </div>



</center>




@endsection