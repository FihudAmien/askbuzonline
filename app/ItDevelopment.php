<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItDevelopment extends Model
{
   use SoftDeletes; 

   protected $table = 'it_development';

   protected $fillable = [
      'titleit' , 'paragraphit' , 'imageit' , 'facebookit', 'emailit', 'whatsappit'
   ];

   protected $hidden =[

   ];
   
}
