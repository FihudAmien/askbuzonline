<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BussinesAnalysis extends Model
{
   use SoftDeletes; 

   protected $table = 'bussines_analysis';

   protected $fillable = [
      'titleba' , 'paragraphba' , 'imageba' , 'facebookba', 'emailba', 'whatsappba'
   ];

   protected $hidden =[

   ];
   
}
