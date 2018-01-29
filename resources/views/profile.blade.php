@extends('layouts.app')
@section('content')
<div class="container">

<div class="row">

<Br>
<div class="col-md-10 col-md-offset-1">
<img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius: 50px; margin-right: 25px; ">
</div>
</div>
<div class="col-md-10 col-md-offset-1">

<h2><span class="glyphicon glyphicon-cog"></span> {{$user->name}}'s profile settings</h2>
<div class="panel panel-default" style="width: 900px; height: 585px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
<div class="panel-heading"><b><span class="glyphicon glyphicon-cog"></span> Update Profile Picture</b></div>
 <div class="panel-body">

<form enctype="multipart/form-data" action="/profile" method="POST"  >


<input type="file" name="avatar">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<button type="submit" class="pull-right btn btn-sm btn-success"><span class="glyphicon glyphicon-upload"></span> Update</button>
 <br>
 <hr>
 <div class="panel-heading"><b><span class="glyphicon glyphicon-cog"></span> Update user info</b></div>
<br>
<ul class="list-group">
<li class="list-group-item"><i><b>user id</b></i> : {{$user->id}} 
</li>
<li class="list-group-item"><i><b>user first name </b></i>: {{$user->name}} 
</li>
<li class="list-group-item"><i><b>user last name</b></i> : {{$user->lname}}
</li>
	<li class="list-group-item"><i><b>user email </b></i>: {{$user->email}}
</li>

<li class="list-group-item"><i><b>user DOB</b></i> : {{$user->dob}} 
</li>
<li class="list-group-item"><i><b>user school</b></i> : {{$user->school}}
</li>
<li class="list-group-item"><i><b>user phone number</b></i> : {{$user->phone}}
</li>
</ul>
<h4><div class="pull-right"><a href='{{url("/updateinfo/{$user->id}")}}' class="label label-success" >EDIT  MY  INFO</a></div></h4>
<br>
<br>
</div>
</form>



</div>
</div>
</div>
</div>
</div>
</div>


@endsection