@extends('layouts.app')

@section('content')


<div class="container">
<br>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <center> <div class="panel-heading"><b>update your info</b></div></center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/edit',array($user->id)) }}">
                        {{ csrf_field() }}
                       
                       
                        
                      
                      <br/>
                      <br/>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo $user->name;?>">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="<?php echo $user->lname;?>">

                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo $user->email;?>">

                               
                            </div>
                        </div>

            
                         <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">DOB</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="<?php echo $user->dob;?>" >

                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="school" class="col-md-4 control-label">School</label>

                            <div class="col-md-6">
                                <input id="school" type="text" class="form-control" name="school" value="<?php echo $user->school;?>" >

                               
                            </div>
                        </div>
                          
                         <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="<?php echo $user->phone;?>" >

                               
                            </div>
                        </div>
                        
       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>
                                   Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
