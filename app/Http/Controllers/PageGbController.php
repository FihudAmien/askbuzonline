<?php

namespace App\Http\Controllers;
use App\ItDevelopment;
use Illuminate\Http\Request;

class PageGbController extends Controller
{
    public function  index()
    {
        $items1 = ItDevelopment::all();
        return view('pages.pageGb', compact('items1')); 
    }
}
