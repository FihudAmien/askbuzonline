<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactitPackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
      'title_contactit' , 'paragraph_contactit' , 'image_contactit'
   ];

   protected $hidden =[

   ];
   
}
