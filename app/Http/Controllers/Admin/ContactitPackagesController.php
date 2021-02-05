<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactitPackagesRequest;
use App\ContactitPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactitPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items6 = ContactitPackages::all();

        return view ('pages.admin.contactit-packages.index',[
        'items6' => $items6
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.contactit-packages.create');
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
        
        if ($request->hasFile('image_contactit')) {
            $data['image_contactit'] = time().'.'.request()->image_contactit->getClientOriginalExtension();
            
            request()->image_contactit->move(public_path('frontend/img/'), $data['image_contactit']);
        }
        
        // $data['image_contactit'] = $request->file('image_contactit')->store('assets/home-packages', 'public'
        // );
        
        ContactitPackages::create($data);
        return redirect()->route('contactit-packages.index');
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
            $item = ContactitPackages::findOrFail($id);
    
            return view('pages.admin.contactit-packages.edit',[
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
        
        if ($request->hasFile('image_contactit')) {
            $data['image_contactit'] = time().'.'.request()->image_contactit->getClientOriginalExtension();
            
            request()->image_contactit->move(public_path('frontend/img/'), $data['image_contactit']);
        }
        
        // $data['image_contactit'] = $request->file('image_contactit')->store('assets/home-packages', 'public'
        // );
        
        $item = ContactitPackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('contactit-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ContactitPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('contactit-packages.index');
    }
}
