@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">
<div class="col-xs-3">
<div class="row">
<div class="col-xs-12" style="color:#000;">
<div class="well"><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:50px; height:50px;  border-radius: 50px; "<br><h5><span class="glyphicon glyphicon-scale"></span> dashboard > added chapters</h5></div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="well sidebar-nav" align="center">
{!!Form::open(['url'=>'homepage/submit'])!!}

   <div>
  <a href="/homepage" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-arrow-left"></span> Back to dashboard
                              </a>
 <hr>
   </div> 


   <div>
 <a href="/lesson" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-hand-right"></span> Add chapter
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
<h1>Chapters</h1>
<div class="panel panel-default" style=" padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
@if(count($lesson)>0)
@foreach($lesson as $lesson)

<ul class="list-group">
<li class="list-group-item">Chapter Name : {{$lesson->lesson}}
</li>
	
</ul>
@endforeach
@endif
</div>
</div>
</div>
</div>
</div>


@endsection
@section('sidebar')
@parent

@endsection