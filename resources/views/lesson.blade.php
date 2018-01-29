@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
<div class="col-xs-3">
<div class="row">
<br>
<br>
<div class="col-xs-12" style="color:#000;">
<div class="well"><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:50px; height:50px;  border-radius: 50px; "><h4><span class="glyphicon glyphicon-scale"></span>dashboard>add chapter</h4></div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="well sidebar-nav" align="center">

   <div>
  <a href="/homepage" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-arrow-left"></span> Back to dashboard
                              </a>
 <hr>
   </div> 


   <div>
 <a href="/addedlessons" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-hand-right"></span> view Lessons
                              </a>
                            


   </div>
   <hr>
   <div> 
   <a href="/addedlessons" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-file"></span> view reports
                              </a>
  
  </div>
    </div>
</div>
</div>
</div>
<div class="col-xs-9">
<div class="mainContent">

<br>
<br>
<center><div class="panel panel-default" style="width: 800px; height: 580px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<h3>Add chapter</h3>

<form enctype="multipart/form-data" action="/lesson" method="POST"  >
<div class="form-group" align="left" style="width:780px;">

    {{Form::label('grade', 'Select grade')}}
    <br>
     {{Form::select('grade', array('6' => 'Grade 6', '7' => 'grade 7','8' => 'grade 8','9' => 'Grade 9','10' => 'Grade 10'),'',['class'=>'form-control'])}};
</div>
                               <hr>

                                    <br>

<div class="form-group" align="left" >
{{Form::label('lesson','Lesson Name')}}
{{Form::text('lesson','',['class'=>'form-control','placeholder'=>'Enter lesson name'])}}

 <hr>
<label style=" align=left;">upload note</label>

<input type="file" name="file">
 @if ($errors->has('file'))
   <p class="help-block">
  <strong>{{ $errors->first('file') }}</strong>
  </p>
   @endif
    <hr>
   <label style=" align=left;">upload video link</label>
   <input type="text" name="video" class="form-control file_title_c" id="video" placeholder="upload youtube video link">
   <br>
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="pull-right btn btn-sm btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
</div>
{!!Form::close()!!}
</div>
</form>
</div>
</center>
</div>
</div>
</div>
</div>
@endsection