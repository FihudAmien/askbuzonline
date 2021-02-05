<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ItDevelopmentRequest;
use App\ItDevelopment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items1 = ItDevelopment::all();

        return view ('pages.admin.it-development.index',[
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
        return view('pages.admin.it-development.create');
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
        
        if ($request->hasFile('imageit')) {
            $data['imageit'] = time().'.'.request()->imageit->getClientOriginalExtension();
            
            request()->imageit->move(public_path('frontend/img/'), $data['imageit']);
        }
        
        // $data['imageit'] = $request->file('imageit')->store('assets/home-packages', 'public'
        // );
        
        ItDevelopment::create($data);
        return redirect()->route('it-development.index');
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
            $item = ItDevelopment::findOrFail($id);
    
            return view('pages.admin.it-development.edit',[
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
        
        if ($request->hasFile('imageit')) {
            $data['imageit'] = time().'.'.request()->imageit->getClientOriginalExtension();
            
            request()->imageit->move(public_path('frontend/img/'), $data['imageit']);
        }
        
        // $data['imageit'] = $request->file('imageit')->store('assets/home-packages', 'public'
        // );
        
        $item = ItDevelopment::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('it-development.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ItDevelopment::findOrFail($id);
        $item->delete();

        return redirect()->route('it-development.index');
    }
}
