<?php

namespace App\Http\Controllers;
use App\ArticlePackages;
use App\HomePackages;
use Illuminate\Http\Request;

class ShowarticleController extends Controller
{
    public function index($id)
    {

        $items4 = ArticlePackages::find($id);
        

        return view('pages.showarticle', compact('items4')); 
        
    }

}
