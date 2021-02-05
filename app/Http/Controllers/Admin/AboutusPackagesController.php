<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutusPackagesRequest;
use App\AboutusPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutusPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items1 = AboutusPackages::all();

        return view ('pages.admin.aboutus-packages.index',[
        'items1' => $items1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.aboutus-packages.create');
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
        
        if ($request->hasFile('imageAboutus1')) {
            $data['imageAboutus1'] = time().'.'.request()->imageAboutus1->getClientOriginalExtension();
            
            request()->imageAboutus1->move(public_path('frontend/img/'), $data['imageAboutus1']);
        }
        
        // $data['imageaboutus1'] = $request->file('imageaboutus1')->store('assets/home-packages', 'public'
        // );
        
        AboutusPackages::create($data);
        return redirect()->route('aboutus-packages.index');
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
            $item = AboutusPackages::findOrFail($id);
    
            return view('pages.admin.aboutus-packages.edit',[
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
        
        if ($request->hasFile('imageAboutus1')) {
            $data['imageAboutus1'] = time().'.'.request()->imageAboutus1->getClientOriginalExtension();
            
            request()->imageAboutus1->move(public_path('frontend/img/'), $data['imageAboutus1']);
        }
        // $data['imageaboutus1'] = $request->file('imageaboutus1')->store('assets/home-packages', 'public'
        // );
        
        $item = AboutusPackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('aboutus-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AboutusPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('aboutus-packages.index');
    }
}
