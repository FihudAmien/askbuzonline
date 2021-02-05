<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactuiPackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
      'title_contactui' , 'paragraph_contactui' , 'image_contactui'
   ];

   protected $hidden =[

   ];
   
}
