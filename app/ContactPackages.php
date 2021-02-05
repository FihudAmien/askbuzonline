<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
      'title_contact' , 'paragraph_contact' , 'image_contact'
   ];

   protected $hidden =[

   ];
   
}
