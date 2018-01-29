<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   
 public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment=$request->comment;
        $comment->save(); //method to save data in database

        return back();//to redirect
    }
}
