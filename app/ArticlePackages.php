<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticlePackages extends Model
{
   use SoftDeletes; 

   protected $fillable = [
    'titlearticle' , 'paragrapharticle' , 'imagearticle'
   ];

   protected $hidden =[

   ];
   
}
