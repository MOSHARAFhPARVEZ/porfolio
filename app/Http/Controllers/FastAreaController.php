<?php

namespace App\Http\Controllers;

use App\Models\Fast_area;
use Illuminate\Http\Request;

class FastAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.fast_area.index',[
            'fast_areas'=> Fast_area::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.fast_area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'icon'=>'required',
            'number'=>'required',
            'tittle'=>'required',
        ]);
        // error part end

        Fast_area::insert([
            'icon'=> $request->icon,
            'number'=> $request->number,
            'tittle'=> $request->tittle,
        ]);
        return back()->with('success','You Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fast_area $fast_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fast_area = Fast_area::find($id);
        return view('layouts.backend.frontend_part.fast_area.edit',compact('fast_area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // error part start
        $request->validate([
            'icon'=>'required',
            'number'=>'required',
            'tittle'=>'required',
        ]);
        // error part end

        $fast_area_update = Fast_area::find($id)->first();
        $fast_area_update->update([
            'icon'=>$request->icon,
            'number'=>$request->number,
            'tittle'=>$request->tittle,
        ]);


        return back()->with('successm','Your Successfully Updated Your Fast Area Info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fast_area $fast_area)
    {
        $fast_area->delete();
        return back()->with('succcessms','You Successfully Deleted Your Info');
    }
}
