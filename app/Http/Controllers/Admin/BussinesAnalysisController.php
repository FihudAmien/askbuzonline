<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BussinesAnalysisRequest;
use App\BussinesAnalysis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BussinesAnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items1 = BussinesAnalysis::all();

        return view ('pages.admin.bussines-analysis.index',[
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
        return view('pages.admin.bussines-analysis.create');
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
        
        if ($request->hasFile('imageba')) {
            $data['imageba'] = time().'.'.request()->imageba->getClientOriginalExtension();
            
            request()->imageba->move(public_path('frontend/img/'), $data['imageba']);
        }
        
        // $data['imageba'] = $request->file('imageba')->store('assets/home-packages', 'public'
        // );
        
        BussinesAnalysis::create($data);
        return redirect()->route('bussines-analysis.index');
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
            $item = BussinesAnalysis::findOrFail($id);
    
            return view('pages.admin.bussines-analysis.edit',[
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
        
        if ($request->hasFile('imageba')) {
            $data['imageba'] = time().'.'.request()->imageba->getClientOriginalExtension();
            
            request()->imageba->move(public_path('frontend/img/'), $data['imageba']);
        }
        
        // $data['imageba'] = $request->file('imageba')->store('assets/home-packages', 'public'
        // );
        
        $item = BussinesAnalysis::findOrFail($id);

        $item->update($data);
        
        return redirect()->route('bussines-analysis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = BussinesAnalysis::findOrFail($id);
        $item->delete();

        return redirect()->route('bussines-analysis.index');
    }
}
