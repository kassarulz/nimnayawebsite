@extends('layouts.app')
@section('content')
<div class="container">
<br>
<br>
<center><div class="panel panel-default" style="width: 300px; height: 300px; padding-left: 10px; padding-right:10px; padding-bottom: 10px; padding-top: 10px;"  >
    <div class="panel-heading" style="color:#190abd"><b>Assign your subject now</b></div>
    
    <form class="form-horizontal" method="POST" >
                        {{ csrf_field() }}
<br>
                       
 <div class="panel-body">
     

 <div class="form-group" align="center">
    {{Form::label('subject', 'Select your Subject here')}}
    <br>
     {{Form::select('subject', array('maths' => 'Maths', 'science' => 'Science','geography' => 'Geography','health' => 'Health','history' => 'History','sinhala' => 'Sinhala','religion' => 'Religion'))}};
</div>

 <div class="form-group" align="center">
    {{Form::label('grade_id', 'Select your Grade')}}
    <br>
     {{Form::select('grade_id', array('6' => 'Grade 6', '7' => 'Grade 7','8' => 'Grade 8','9' => 'Grade 9','10' => 'Grade 10','6' => 'Grade 6'))}};
</div>
                            <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span>  
                                    Assign
                                </button>
                                </div>
    </div>

</form>
</div>
</form>
</div>
</center>
</div>

@endsection