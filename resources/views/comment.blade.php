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
        <form action="{{url('/comment')}}" method="POST">
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