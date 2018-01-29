@extends('layouts.app')
@section('content')
<div class="col-md-10 col-md-offset-1">
<h1><span class="glyphicon glyphicon-hand-right"></span> Grade 6 subjects</h1>
</div>
<div class="row">

<div class="col-sm-4">
<div class="col-md-10 col-md-offset-3">
<h3>
@if(count($subject_name)>0)
@foreach($subject_name as $subject)



<div>
<a href='{!! url('/6mathslessons'); !!}'>{{$subject->subject_name}}</a> 
</div>
<br>


@endforeach
@endif

<br>
</h3>
</div>
</div>
<div class="col-sm-4">
<img src="/uploads/avatars/icons/image21.jpg" style="width:780px; height:380px; align:right;">

</div>
</div>





@endsection
@section('sidebar')
@parent

@endsection
