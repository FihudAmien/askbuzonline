<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutPackagesRequest;
use App\AboutPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items2 = AboutPackages::all();

        return view ('pages.admin.about-packages.index',[
        'items2' => $items2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.about-packages.create');
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
        
        if ($request->hasFile('imageabout')) {
            $data['imageabout'] = time().'.'.request()->imageabout->getClientOriginalExtension();
            
            request()->imageabout->move(public_path('frontend/img/'), $data['imageabout']);
        }
        
        // $data['imageabout'] = $request->file('imageabout')->store('assets/home-packages', 'public'
        // );
        
        AboutPackages::create($data);
        return redirect()->route('about-packages.index');
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
            $item = AboutPackages::findOrFail($id);
    
            return view('pages.admin.about-packages.edit',[
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
        
        if ($request->hasFile('imageabout')) {
            $data['imageabout'] = time().'.'.request()->imageabout->getClientOriginalExtension();
            
            request()->imageabout->move(public_path('frontend/img/'), $data['imageabout']);
        }
        
        // $data['imageabout'] = $request->file('imageabout')->store('assets/home-packages', 'public'
        // );
        
        $item = AboutPackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('about-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = AboutPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('about-packages.index');
    }
}
