<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.solution.index',[
            'solutions'=> Solution::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.solution.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'header'=>'required',
            'description'=>'required',
            'icon'=>'required',
        ]);
        // error part end

        Solution::insert([
            'header'=>$request->header,
            'description'=>$request->description,
            'icon'=>$request->icon,
            'created_at'=> Carbon::now(),
        ]);
        return back()->with('success', 'You Successfully Added Your service');
    }

    /**
     * Display the specified resource.
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $solutions = Solution::find($id);
        return view('layouts.backend.frontend_part.solution.edit',compact('solutions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // error part start
        $request->validate([
            'header'=>'required',
            'description'=>'required',
            'icon'=>'required',
        ]);
        // error part end

        $solution_update = Solution::find($id)->first();
        $solution_update->update([
            'header'=>$request->header,
            'description'=>$request->description,
            'icon'=>$request->icon,
        ]);

        return back()->with('successm','You Successfully Changed Your Info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solution $solution)
    {
        $solution->delete();
        return back()->with('succcessms','You Successfully Deleted Your Info');
    }
}
