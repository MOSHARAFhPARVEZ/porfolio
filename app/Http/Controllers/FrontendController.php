<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Banner;
use App\Models\Best_works;
use App\Models\Contact;
use App\Models\Fast_area;
use App\Models\Solution;
use App\Models\Testimonial;
use App\Models\Frontend;
use App\Models\Msgyou;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend(){
        return view('frontend.index',[
            'banners'=>Banner::all(),
            'abouts'=>about::all(),
            'solutions'=>Solution::all(),
            'best_works'=>Best_works::all(),
            'fast_areas'=>Fast_area::all(),
            'testimonials'=>Testimonial::all(),
            'contacts' => Contact::all(),
        ]);
    }

    public function msgyou(Request $request){
        // error part
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        // error part
        Msgyou::insert([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
            'created_at' => Carbon::now(),
        ]);
        return back();
        
    }




}
