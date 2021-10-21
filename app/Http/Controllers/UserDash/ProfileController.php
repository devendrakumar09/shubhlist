<?php

namespace App\Http\Controllers\UserDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function update(Request $req)
    {
        $validated = $req->validate([
            'name' => 'max:255',
            'phone' => 'max:10',
            'address' => 'max:255',
        ]);

        
        $user = User::find(Auth::user()->id);
        $user->name = $req->name;
        $user->save();

        $profile = Profile::where('user_id',Auth::user()->id)->first();
        $profile->phone = $req->phone;
        $profile->dob = $req->DOB;
        $profile->address = $req->address;

         /**----------------Image 1------------------- */
         $file = $req->file('profile');
         if(isset($file) || $file != null){
             $destinationPath = public_path().'/upload/admin_profile/';
             $filenameWithExt = $req->file('profile')->getClientOriginalName();
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             $extension = $req->file('profile')->getClientOriginalExtension();
             $profile_name = $filename.'_'.time().'.'.$extension;
             $path = $file->move($destinationPath, $profile_name);
             $profile->image = $profile_name;
         }else{
            $profile_name = '';
         }
         
        $profile->save();
        if ($profile) {
            return back();
        }else {
            return back();
        }

    }
}
