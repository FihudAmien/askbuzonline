<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
    'title' , 'paragraph' , 'image'
   ];

   protected $hidden =[

   ];
   
}
