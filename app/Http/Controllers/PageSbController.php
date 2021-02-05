<?php

namespace App\Http\Controllers;
use App\UiuxDesign;
use Illuminate\Http\Request;

class PageSbController extends Controller
{
    public function  index()
    {
        
        $items1 = UiuxDesign::all();
        return view('pages.pageSb', compact('items1')); 
    }
}
