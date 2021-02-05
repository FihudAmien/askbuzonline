<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactuiPackagesRequest;
use App\ContactuiPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactuiPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items5 = ContactuiPackages::all();

        return view ('pages.admin.contactui-packages.index',[
        'items5' => $items5
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.contactui-packages.create');
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
        
        if ($request->hasFile('image_contactui')) {
            $data['image_contactui'] = time().'.'.request()->image_contactui->getClientOriginalExtension();
            
            request()->image_contactui->move(public_path('frontend/img/'), $data['image_contactui']);
        }
        
        // $data['image_contactui'] = $request->file('image_contactui')->store('assets/home-packages', 'public'
        // );
        
        ContactuiPackages::create($data);
        return redirect()->route('contactui-packages.index');
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
            $item = ContactuiPackages::findOrFail($id);
    
            return view('pages.admin.contactui-packages.edit',[
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
        
        if ($request->hasFile('image_contactui')) {
            $data['image_contactui'] = time().'.'.request()->image_contactui->getClientOriginalExtension();
            
            request()->image_contactui->move(public_path('frontend/img/'), $data['image_contactui']);
        }
        
        // $data['image_contactui'] = $request->file('image_contactui')->store('assets/home-packages', 'public'
        // );
        
        $item = ContactuiPackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('contactui-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ContactuiPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('contactui-packages.index');
    }
}
