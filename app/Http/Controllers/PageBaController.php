<?php

namespace App\Http\Controllers;
use App\BussinesAnalysis;
use Illuminate\Http\Request;

class PageBaController extends Controller
{
    public function  index()
    {
        $items1 = BussinesAnalysis::all();
        return view('pages.pageBa', compact('items1')); 
    }
}
