<?php

namespace App\Http\Controllers\UserDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Invitation;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $invitations = Invitation::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
        return view('UserDash.dashboard')
                    ->with('user',$user)
                    ->with('invitations',$invitations);
    }
}
