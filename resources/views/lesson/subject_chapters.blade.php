@extends('layouts.app')
@section('content')
    @foreach($sub as  $sub)
<div class="col-md-10 col-md-offset-1">

<h1><span class="glyphicon glyphicon-hand-right"></span> Grade <?php echo $grade.' '.$sub->subject?> chapters</h1>

</div>
<div class="row">

<div class="col-sm-4">
<div class="col-md-10 col-md-offset-3">
<h3>

    @foreach($lessons as  $lesson)
    <div>
        <a href='{!! url('/lesson_chapter/'.$lesson->lesson.'/'.$grade.'/'.$sub->id); !!}'><?php echo $lesson->lesson ?></a>
    </div>
    @endforeach


<br>
</h3>
</div>
</div>
<div class="col-sm-4">
</div>
</div>


@endforeach


@endsection
@section('sidebar')
@parent

@endsection
