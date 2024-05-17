<?php

namespace App\Http\Controllers;

use App\Models\Best_works;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class BestWorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.best_works.index',[
            'best_works'=>Best_works::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.best_works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'header'=>'required',
            'tittle'=>'required',
            'photo'=>'required|image',
        ]);
        // error part end


        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            $newname = uniqid() . "." . $request->file('photo')->getClientOriginalExtension();
            $img =  $manager->read($request->file('photo'))->resize(415,685);
            $img->toJpeg(80)->save(base_path('public/uploads/best_works/'.$newname));

            Best_works::insert([
            'header'=>$request->header,
            'tittle'=>$request->tittle,
            'description' => $request->description,
            'photo'=>$newname,
            'created_at'=> Carbon::now(),
            ]);
        }
        return back()->with('success','Your Successfully Add Your Best Works Info');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $best_works = Best_works::find($id);
        return view('layouts.backend.frontend_part.best_works.show',compact('best_works'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $best_works = Best_works::find($id);
        return view('layouts.backend.frontend_part.best_works.edit',compact('best_works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // all error part
        // $request->validate([
        //     'header'=>'required',
        //     'tittle'=>'required',
        //     'photo'=>'required|image',
        // ]);
        // all error part



        $best_works_photo_update = Best_works::find($id)->first();
        $best_works_photo_path = 'uploads/best_works'. $best_works_photo_update->photo;

        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            if (file::exists($best_works_photo_path)) {
                unlink($best_works_photo_path);
            }
            $newname = uniqid() . "." . $request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->file('photo'))->resize(415,685);
            $img->toJpeg(80)->save(base_path('public/uploads/best_works/'.$newname));
            Best_works::find($id)->update([
                'photo'=>$newname,
            ]);
        }

        $best_works_photo_update->update([
            'header'=>$request->header,
            'tittle'=>$request->tittle,
        ]);
        return back()->with('successm','Your Successfully Updated Your Best Works Info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $delete = Best_works::findorfail($id);
        $best_works_photo_path = 'uploads/best_works'. $delete->photo;
        if (File::exists($best_works_photo_path)) {
            unlink($best_works_photo_path);
        }
        $delete->delete();
        return back()->with('succes','You Successfully Deleted Your Best Works Info');
    }
}




