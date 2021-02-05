<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutPackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
    'titleabout' , 'paragraphabout' , 'imageabout'
   ];

   protected $hidden =[

   ];
   
}
