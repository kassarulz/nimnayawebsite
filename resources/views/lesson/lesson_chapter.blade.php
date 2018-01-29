@extends('layouts.app')
@section('content')
    @foreach($sub as  $sub)
        @foreach($chapter as  $chapter)
        <div class="col-md-10 col-md-offset-1">

            <h1><span class="glyphicon glyphicon-hand-right"></span> Grade <?php echo $grade.' '.$sub->subject.' '?> chapter <?php echo ' '.$chapter->lesson?></h1>

        </div>
        <div class="row">

            <div class="col-sm-4">
                <div class="col-md-10 col-md-offset-3">
                    <h3>

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe
                                        class="embed-responsive-item"
                                        width="1080"
                                        height="720"
                                        src="<?php echo $chapter->video?>"
                                        gesture="media"
                                        allow="encrypted-media"
                                        allowfullscreen>
                                </iframe>
                            </div>

                        <br>

                            <?php $file_path='public/uploadednotes/'.$chapter->file ?>

                            <a  href="{{url('showfile/'.$file_path)}}" target="_blank" >Open the pdf! </a>
<br>
<br>
<br>
                             <a  href="{{url('showfile/'.$file_path)}}" target="_blank" class="btn btn-success">Attempt exam </a>

                             <!doctype html>
<html lang="{{ app()->getLocale() }}">
 <link href="public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Vedio</title>
<style>
            html, body {
                background-color: #ECFF33;
                color:#5bc0de;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
          </style>
  
</head>
   <body>
      <h1>Comments about video</h1>

      

      <hr>
        <form action="{{url('/lesson_chapter')}}" method="POST">
          {{csrf_field()}}

          <div class="form-group">
            <label for="comment">Write comment</label>

            <input class="form-control" name="comment" placeholder="Write comment" type="text">
          </div>

          <input class="btn btn-primary" type="submit" value="Comment">
        </form>

        <br>

        <h5> Comments</h5>
        </hr>
         <ol>
     @forelse($comment as $comment)

        <p>{{ $comment->comment }}   {{ $comment->id }}</p>
         <p>{{ $comment-> created_at}} </p>

        @empty
        <h4>No Comments</h4>
        @endforelse
    </ol>
 
    </body>
    </html>


                    </h3>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>

        @endforeach
    @endforeach


@endsection
@section('sidebar')
    @parent

@endsection
