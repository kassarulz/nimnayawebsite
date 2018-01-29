@extends('layouts.app')
@section('content')
<br>

<h1>teacher reports</h1>
<div class="container">
<div>
 <a href='{!! url('/TeacherReport1'); !!}' class="btn btn-primary">View chapter reports</a>
</div>
<br>
<div>
 <a href='{!! url('/TeacherReport2'); !!}' class="btn btn-primary">View student details reports</a> 
</div>
<br>
<div>
<a href='{!! url('/TeacherReport3'); !!}' class="btn btn-primary">View student progress reports</a> 
</div>
 </div> 
 <br>
 <br>

 


             
 @endsection

@section('sidebar')
@parent

@endsection