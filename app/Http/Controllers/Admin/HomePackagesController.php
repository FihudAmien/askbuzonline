<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomePackagesRequest;
use App\HomePackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomePackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items1 = HomePackages::all();

        return view ('pages.admin.home-packages.index',[
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
        return view('pages.admin.home-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomePackagesRequest $request)
    {
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $data['image'] = time().'.'.request()->image->getClientOriginalExtension();
            
            request()->image->move(public_path('frontend/img/'), $data['image']);
        }
        
        // $data['image'] = $request->file('image')->store('assets/home-packages', 'public'
        // );
        
        HomePackages::create($data);
        return redirect()->route('home-packages.index');
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
        $item = HomePackages::findOrFail($id);

        return view('pages.admin.home-packages.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomePackagesRequest $request, $id)
    {
        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $data['image'] = time().'.'.request()->image->getClientOriginalExtension();
            
            request()->image->move(public_path('frontend/img/'), $data['image']);
        }
        
        // $data['image'] = $request->file('image')->store('assets/home-packages', 'public'
        // );
        
        $item = HomePackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('home-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = HomePackages::findOrFail($id);
        $item->delete();

        return redirect()->route('home-packages.index');
    }
}
