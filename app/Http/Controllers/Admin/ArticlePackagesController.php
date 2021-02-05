<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticlePackagesRequest;
use App\ArticlePackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticlePackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items4 = ArticlePackages::paginate(3);;

        return view ('pages.admin.article-packages.index',[
        'items4' => $items4
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.article-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        if ($request->hasFile('imagearticle')) {
            $data['imagearticle'] = time().'.'.request()->imagearticle->getClientOriginalExtension();
            
            request()->imagearticle->move(public_path('frontend/img/'), $data['imagearticle']);
        }
        
        // $data['imagearticle'] = $request->file('imagearticle')->store('assets/home-packages', 'public'
        // );
        
        ArticlePackages::create($data);
        return redirect()->route('article-packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $item = ArticlePackages::findOrFail($id);
    
            return view('pages.admin.article-packages.edit',[
                'item' => $item
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        if ($request->hasFile('imagearticle')) {
            $data['imagearticle'] = time().'.'.request()->imagearticle->getClientOriginalExtension();
            
            request()->imagearticle->move(public_path('frontend/img/'), $data['imagearticle']);
        }
        
        // $data['imagearticle'] = $request->file('imagearticle')->store('assets/home-packages', 'public'
        // );
        
        $item = ArticlePackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('article-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ArticlePackages::findOrFail($id);
        $item->delete();

        return redirect()->route('article-packages.index');
    }
}
