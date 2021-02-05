<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactPackagesRequest;
use App\ContactPackages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items3 = ContactPackages::all();

        return view ('pages.admin.contact-packages.index',[
        'items3' => $items3
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.contact-packages.create');
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
        
        if ($request->hasFile('image_contact')) {
            $data['image_contact'] = time().'.'.request()->image_contact->getClientOriginalExtension();
            
            request()->image_contact->move(public_path('frontend/img/'), $data['image_contact']);
        }
        
        // $data['image_contact'] = $request->file('image_contact')->store('assets/home-packages', 'public'
        // );
        
        ContactPackages::create($data);
        return redirect()->route('contact-packages.index');
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
            $item = ContactPackages::findOrFail($id);
    
            return view('pages.admin.contact-packages.edit',[
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
        
        if ($request->hasFile('image_contact')) {
            $data['image_contact'] = time().'.'.request()->image_contact->getClientOriginalExtension();
            
            request()->image_contact->move(public_path('frontend/img/'), $data['image_contact']);
        }
        
        // $data['image_contact'] = $request->file('image_contact')->store('assets/home-packages', 'public'
        // );
        
        $item = ContactPackages::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('contact-packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ContactPackages::findOrFail($id);
        $item->delete();

        return redirect()->route('contact-packages.index');
    }
}
