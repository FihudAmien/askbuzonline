<?php

namespace App\Http\Controllers;

use App\HomePackages;
use App\AboutPackages;
use App\ContactPackages;
use App\ArticlePackages;
use App\ContactuiPackages;
use App\ContactitPackages;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items1 = HomePackages::all();
        $items2 = AboutPackages::all();
        $items3 = ContactPackages::all();
        $items4 = ArticlePackages::where('id', '<=' , 3)->get();
        $items5 = ContactuiPackages::all();
        $items6 = ContactitPackages::all();

        return view('pages.home', compact('items1', 'items2','items3','items4','items5','items6'));    
    }
}


