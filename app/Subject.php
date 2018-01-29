<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
		protected $table='subjects';
   protected $fillable=['subject_name','grade_id','created_at','updated_at'];
   
}
