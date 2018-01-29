@extends('layouts.app')
@section('content')
<br>

<h1>student reports</h1>
<div class="container">
<div>
 <a href='{!! url('/StudentReport1'); !!}' class="btn btn-primary">View details of registered subjects reports</a> 
</div>
<br>
<div>
 <a href='{!! url('/StudentReport2'); !!}'  class="btn btn-primary">View weak area reports</a> 
</div>
<br>
<div>
 <a href='{!! url('/StudentReport3'); !!}'  class="btn btn-primary">View student details reports</a> 
</div>
 </div> 
 <br>
 <br>

 


             
 @endsection

@section('sidebar')
@parent

@endsection