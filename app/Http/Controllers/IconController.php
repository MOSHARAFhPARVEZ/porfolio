<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use Illuminate\Http\Request;

class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.icon.index',[
            'icons' => Icon::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.icon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part
        $request->validate([
            'icon_one' => 'required',
            'icon_two' => 'required',
            'icon_three' => 'required',
            'icon_four' => 'required',
            'link_one' => 'required',
            'link_two' => 'required',
            'link_three' => 'required',
            'link_four' => 'required',
        ]);
        // error part
        Icon::insert([
            'icon_one' => $request->icon_one,
            'icon_two' => $request->icon_two,
            'icon_three' => $request->icon_three,
            'icon_four' => $request->icon_four,
            'link_one' => $request->link_one,
            'link_two' => $request->link_two,
            'link_three' => $request->link_three,
            'link_four' => $request->link_four,
        ]);
        return back()->with('success', 'You Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $icon = Icon::find($id)->first();
        return view('layouts.backend.frontend_part.icon.edit',compact('icon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // error part
        $request->validate([
            'icon_one' => 'required',
            'icon_two' => 'required',
            'icon_three' => 'required',
            'icon_four' => 'required',
            'link_one' => 'required',
            'link_two' => 'required',
            'link_three' => 'required',
            'link_four' => 'required',
        ]);
        // error part
        $icon_update = Icon::find($id)->first();
        $icon_update->update([
            'icon_one' => $request->icon_one,
            'icon_two' => $request->icon_two,
            'icon_three' => $request->icon_three,
            'icon_four' => $request->icon_four,
            'link_one' => $request->link_one,
            'link_two' => $request->link_two,
            'link_three' => $request->link_three,
            'link_four' => $request->link_four,
        ]);
        return back()->with('success', 'You Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $icon_delete = Icon::find($id);
        $icon_delete->delete();
        return back()->with('successm','You Successfully Deleted');
    }
}
