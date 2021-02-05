<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutusPackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
    'title' , 'imageAboutus1' ,'paragraphAboutus1', 'paragraphAboutus2'
   ];

   protected $hidden =[

   ];
   
}
