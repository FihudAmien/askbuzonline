<?php

namespace App\Http\Controllers;
use App\ArticlePackages;
use Illuminate\Http\Request;

class PagearticleusController extends Controller
{
    public function  index(REQUEST $request)
    {
        $items4 = ArticlePackages::latest()->paginate(6);;

        return view('pages.pagearticleus', compact('items4'));
    }
}
