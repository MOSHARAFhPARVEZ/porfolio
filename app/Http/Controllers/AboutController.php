<?php

namespace App\Http\Controllers;

use App\Models\about;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts\backend\frontend_part\about\index',[
            'abouts'=>About::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'long_description'=>'required',
            'edu_one_year'=>'required',
            'edu_one_name'=>'required',
            'edu_one_mark'=>'required',
            'edu_two_year'=>'required',
            'edu_two_name'=>'required',
            'edu_two_mark'=>'required',
            'edu_three_year'=>'required',
            'edu_three_name'=>'required',
            'edu_three_mark'=>'required',
            'edu_four_year'=>'required',
            'edu_four_name'=>'required',
            'edu_four_mark'=>'required',
            'photo'=>'required',
        ]);
        // error part end


        // Insert part start
        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            $newname = uniqid(). "." . $request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'))->resize(434,635);
            $img->toPng(80)->save(base_path('public/uploads/about_photo/'.$newname));

            about::insert([
            'long_description'=>$request->long_description,
            'edu_one_year'=>$request->edu_one_year,
            'edu_one_name'=>$request->edu_one_name,
            'edu_one_mark'=>$request->edu_one_mark,
            'edu_two_year'=>$request->edu_two_year,
            'edu_two_name'=>$request->edu_two_name,
            'edu_two_mark'=>$request->edu_two_mark,
            'edu_three_year'=>$request->edu_three_year,
            'edu_three_name'=>$request->edu_three_name,
            'edu_three_mark'=>$request->edu_three_mark,
            'edu_four_year'=>$request->edu_four_year,
            'edu_four_name'=>$request->edu_four_name,
            'edu_four_mark'=>$request->edu_four_mark,
            'photo'=>$newname,
            'created_at'=> Carbon::now(),
            ]);
        }
        return back()->with('succ','You Successfully Added About Info');
        // Insert part end
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = about::find($id);
        return view('layouts.backend.frontend_part.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about_photo_update = about::find($id)->first();
        $about_photo_path = 'uploads/about_photo'.$about_photo_update->photo;

        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            if (File::exists($about_photo_path)) {
                unlink($about_photo_path);
            }
            $newname = Auth::user()->id . Carbon::now()->format('Y-m-d'). '.' . $request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'))->resize(434,635);
            $img->toPng(80)->save(base_path('public/uploads/about_photo/'.$newname));
            about::find($id)->update([
                'photo'=> $newname,
            ]);
        }

        $about_photo_update->update([
            'long_description'=>$request->long_description,
            'edu_one_year'=>$request->edu_one_year,
            'edu_one_name'=>$request->edu_one_name,
            'edu_one_mark'=>$request->edu_one_mark,
            'edu_two_year'=>$request->edu_two_year,
            'edu_two_name'=>$request->edu_two_name,
            'edu_two_mark'=>$request->edu_two_mark,
            'edu_three_year'=>$request->edu_three_year,
            'edu_three_name'=>$request->edu_three_name,
            'edu_three_mark'=>$request->edu_three_mark,
            'edu_four_year'=>$request->edu_four_year,
            'edu_four_name'=>$request->edu_four_name,
            'edu_four_mark'=>$request->edu_four_mark,
        ]);
        return back()->with('succe', 'You Successfully Updated Your About Info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = about::findorfail($id);
        $about_photo_path = 'uploads/about_photo'.$delete->photo;
        if (File::exists($about_photo_path)) {
                unlink($about_photo_path);
        }
        $delete->delete();
        return back()->with('succes','You Successfully Deleted Your About Info');
    }
}
