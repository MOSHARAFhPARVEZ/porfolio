<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.testimonial.index',[
            'testimonials'=>Testimonial::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'comment'=>'required',
            'photo'=>'required|image',
        ]);
        // error part end


        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            $newname = uniqid() . "." . $request->file('photo')->getClientOriginalExtension();
            $img = $manager->read($request->File('photo'))->resize(86,86);
            $img->toJpeg(80)->save(base_path('public/uploads/testimonial/'.$newname));

            Testimonial::insert([
                'name'=> $request->name,
                'position'=> $request->position,
                'comment'=> $request->comment,
                'photo'=> $newname,
                'created_at'=> Carbon::now(),
            ]);

        }
        return back()->with('success','You Successfully Added Your Info');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('layouts.backend.frontend_part.testimonial.edit',compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimonial_update = Testimonial::find($id)->first();
        $testimonial_path = 'uploads/testimonial'. $testimonial_update->photo;
        if ($request->hasFile('photo')) {
            $manager = new ImageManager(new Driver());
            if (file::exists($testimonial_path)) {
                unlink($testimonial_path);
            }
            $newname= uniqid(). "." . $request->file('photo')->getClientOriginalExtension();
            $img= $manager->read($request->file('photo'))->resize(86,86);
            $img->toJpeg(80)->save(base_path('public/uploads/testimonial/'.$newname));
            Testimonial::find($id)->update([
                'photo'=> $newname,
            ]);
        }
        $testimonial_update->update([
            'name'=> $request->name,
            'position'=> $request->position,
            'comment'=> $request->comment,
        ]);
        return back()->with('success','You Successfully Updated Your Info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Testimonial::findorfail($id)->first();
        $testimonial_path = 'uploads/testimonial'. $delete->photo;
        if (File::exists($testimonial_path)) {
            unlink($testimonial_path);
        }
        $delete->delete();
        return back()->with('succes','You Successfully Deleted Testimonial Works Info');
    }
}
