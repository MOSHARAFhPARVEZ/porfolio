<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.backend.frontend_part.banner.index',[
            'banners'=>Banner::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.frontend_part.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // error part start
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'banner' => 'required|image',
            'icon_one' => 'required',
            'icon_two' => 'required',
            'icon_three' => 'required',
            'icon_four' => 'required',
            'link_one' => 'required',
            'link_two' => 'required',
            'link_three' => 'required',
            'link_four' => 'required',
        ]);
        // error part end

        if ($request->hasFile('banner')) {
            $manager = new ImageManager(new Driver());
            $new_name = uniqid(). "." . $request->file('banner')->getClientOriginalExtension();
            $img= $manager->read($request-> file('banner'))->resize(600,850);
            $img->toPng(80)->save(base_path('public/uploads/banner/'. $new_name));


            Banner::insert([
                'banner' => $new_name,
                'name'=> $request->name,
                'description'=> $request->description,
                'icon_one' => $request->icon_one,
                'icon_two' => $request->icon_two,
                'icon_three' => $request->icon_three,
                'icon_four' => $request->icon_four,
                'link_one' => $request->link_one,
                'link_two' => $request->link_two,
                'link_three' => $request->link_three,
                'link_four' => $request->link_four,
                'created_at'=> Carbon::now(),
            ]);

            return back()->with('succm', 'You Successfully Changed Your Cover Photo');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner, $id)
    {
        $banner = Banner::find($id);
        return view('layouts.backend.frontend_part.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $bannerUpdate = Banner::find($id)->first();

        $imagePath = 'uploads/banner/'.$bannerUpdate->banner;


        if ($request->hasFile('banner')) {
            $manager = new ImageManager(new Driver());
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
            $new_name = Auth::user()->id . Carbon::now()->format('Y-m-d') . "." . $request->file('banner')->getClientOriginalExtension();
            $img= $manager->read($request-> file('banner'))->resize(600,850);
            $img->toPng(80)->save(base_path('public/uploads/banner/'. $new_name));

            Banner::find($id)->update([
                'banner' => $new_name,
            ]);

        }

       $bannerUpdate->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'icon_one' => $request->icon_one,
            'icon_two' => $request->icon_two,
            'icon_three' => $request->icon_three,
            'icon_four' => $request->icon_four,
            'link_one' => $request->link_one,
            'link_two' => $request->link_two,
            'link_three' => $request->link_three,
            'link_four' => $request->link_four,
        ]);


        return back()->with('succm', 'You Successfully Changed Your Cover Photo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Banner::findOrFail($id);
        $imagePath = 'uploads/banner/'.$delete->banner;
        if(File::exists($imagePath)){
                unlink($imagePath);
            }
        $delete->delete();
        return back();
    }
}
