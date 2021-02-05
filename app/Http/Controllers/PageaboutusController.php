<?php

namespace App\Http\Controllers;
use App\AboutusPackages;
use Illuminate\Http\Request;

class PageaboutusController extends Controller
{
    public function  index()
    {
        
        $items1 = AboutusPackages::all();
        return view('pages.pageaboutus', compact('items1')); 
    }
}
