<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UiuxDesign extends Model
{
   use SoftDeletes; 

   protected $table = 'uiux_design';

   protected $fillable = [
      'titleuiux' , 'paragraphuiux' , 'imageuiux' , 'facebookuiux', 'emailuiux', 'whatsappuiux'
   ];

   protected $hidden =[

   ];
   
}
