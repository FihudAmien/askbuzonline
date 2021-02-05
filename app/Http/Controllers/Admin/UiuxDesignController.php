<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UiuxDesignRequest;
use App\UiuxDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UiuxDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items1 = UiuxDesign::all();

        return view ('pages.admin.uiux-design.index',[
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
        return view('pages.admin.uiux-design.create');
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
        
        if ($request->hasFile('imageuiux')) {
            $data['imageuiux'] = time().'.'.request()->imageuiux->getClientOriginalExtension();
            
            request()->imageuiux->move(public_path('frontend/img/'), $data['imageuiux']);
        }
        
        // $data['imageuiux'] = $request->file('imageuiux')->store('assets/home-packages', 'public'
        // );
        
        UiuxDesign::create($data);
        return redirect()->route('uiux-design.index');
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
            $item = UiuxDesign::findOrFail($id);
    
            return view('pages.admin.uiux-design.edit',[
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
        
        if ($request->hasFile('imageuiux')) {
            $data['imageuiux'] = time().'.'.request()->imageuiux->getClientOriginalExtension();
            
            request()->imageuiux->move(public_path('frontend/img/'), $data['imageuiux']);
        }
        
        // $data['imageuiux'] = $request->file('imageuiux')->store('assets/home-packages', 'public'
        // );
        
        $item = UiuxDesign::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('uiux-design.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = UiuxDesign::findOrFail($id);
        $item->delete();

        return redirect()->route('uiux-design.index');
    }
}
