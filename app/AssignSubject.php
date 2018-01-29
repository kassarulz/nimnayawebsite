<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
   protected $fillable=['id','subject','grade_id','created_at','updated_at'];
   protected $primaryKey='id';
}
