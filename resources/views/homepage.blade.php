@extends('layouts.app')
@section('content')
<br>
<div class="container" ">

<div class="row">
<div class="col-xs-3">
<div class="row">
<div class="col-xs-12" style="color:#000;">
<div class="well"><img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:50px; height:50px;  border-radius: 50px; "><h1><span class="glyphicon glyphicon-scale"></span>dashboard</h1></div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="well sidebar-nav" align="center">
{!!Form::open(['url'=>'homepage/submit'])!!}

   <div>
  <a href="/lesson" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-plus"></span> add Chapters
                              </a>
 <hr>
   </div> 


   <div>
 <a href="/addedlessons" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-hand-right"></span> view Chapters
                              </a>
                            


   </div>
   <hr>
   <div>
  <a href="/addexam" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-plus"></span> add exam
                              </a>
 <hr>
   </div> 
   <div> 
   <a href="/teacherreports" class="btn btn-info" role="button" style="width:220px;height: 70px; " ><span class="glyphicon glyphicon-file"></span> view reports
                              </a>
                              <br>
                              <br>
                              <br>
  
  </div>
    </div>
</div>
</div>
</div>
<div class="col-xs-9">
<div class="mainContent">
 @section('sidebar')
<div class="well">
  <h3>Nimnaya</h3>
  <hr>
<p>Nimnaya is an educational platform which facilitates students and teachers connected through web and mobile technologies and can provide free class education in a virtual world. Students nowadays tend to use internet to search for educational videos to learn their relevant subjects.</p>
<div class=""panel panel-primary" >
<div class="row">
 
    <div class="panel-body">
    <div class="col-sm-6">
<div class="well" style="background:#0f345e; color: #d6d6d6">
<div class="col-md-6">
<img src="/uploads/avatars/icons/press.png" style="width:80px; height:80px;">
 </div>
     <h4>offering Reading materials for each subject</h4>
    
     <br>
    </div>
    </div>
    

    <div class="col-sm-6">
    <div class="well" style="background:  #5c063f; color: #d6d6d6">
    <div class="col-md-6">
<img src="/uploads/avatars/icons/32226-200.png" style="width:80px; height:80px;">
 </div>
       <h4>uploading video tutorials for every lesson</h4>
       <br>
    </div>
  </div>
   </div>
    <div class="col-sm-6">
    <div class="panel-body">
    <div class="well" style="background:    #9289d4; color: #d6d6d6">  
     <div class="col-md-6">
<img src="/uploads/avatars/icons/Final.png" style="width:80px; height:80px;">
 </div>
        <h4> providing test papers for every chapter </h4>
        <br>
    </div>
    </div>
  </div>

<br>
    <div class="col-sm-6">
<div class="well" style="background:#8d1414; color: #d6d6d6">
<div class="col-md-6">
<img src="/uploads/avatars/icons/251.jpg" style="width:80px; height:80px;">
 </div>
     <h4>conveying conversation about subject matters</h4>
    
     <br>
    </div>
    </div>
    </div>
    </div>
    

    
  @show


</div>
</div>
</div>
</div>

 

 


             
 @endsection

@section('sidebar')
@parent

@endsection