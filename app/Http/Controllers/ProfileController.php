<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class ProfileController extends Controller
{
    public function profile(){
        return view('layouts.backend.profile.profile');
    }

    public function profile_photo(Request $request){

        // profile photo upload and change part start

        // error part start
        $request->validate([
            'profile_photo' => 'required|image',
        ]);
        // error part end

        if ($request->hasFile('profile_photo')) {
            $manager = new ImageManager(new Driver());
            $new_name = Auth::user()->id. "." . $request->file('profile_photo')->getClientOriginalExtension();
            $img= $manager->read($request-> file('profile_photo'))->resize(300,300);
            $img->toJpeg(80)->save(base_path('public/uploads/profile_photo/'. $new_name));

            User::find(auth()->id())->update([
                'profile_photo' => $new_name,
            ]);


            return back()->with('succ', 'You Successfully Changed Your Profile Photo');
        }

        // profile photo upload and change part end
    }


    // Cover photo upload and change part start

    public function cover_photo(Request $request){


        // error part start
        $request->validate([
            'cover_photo' => 'required|image',
        ]);
        // error part end

        if ($request->hasFile('cover_photo')) {
            $manager = new ImageManager(new Driver());
            $new_name = Auth::user()->id. "." . $request->file('cover_photo')->getClientOriginalExtension();
            $img= $manager->read($request-> file('cover_photo'))->resize(1600,460);
            $img->toJpeg(80)->save(base_path('public/uploads/cover_photo/'. $new_name));

            User::find(auth()->id())->update([
                'cover_photo' => $new_name,
            ]);

            return back()->with('succm', 'You Successfully Changed Your Cover Photo');

        }

    }

    // Cover photo upload and change part end


    // password change part start

    public function pass_Cng(Request $request){

        // error part start
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        // error part end

        // password change part

        if (Hash::check($request->old_password, auth()->user()->password)) {
            User::find(auth()->user()->id)->update([
                'password'=> bcrypt($request->password)
            ]);
            return back()->with('success','You Successfully Changed Your Password');
        }
        else {
            return back()->withErrors('You Entered Wrong Password');
        }


        // password change part
    }

    // password change part end

}
