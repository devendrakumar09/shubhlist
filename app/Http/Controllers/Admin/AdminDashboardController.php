<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Feedback;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $invitations = Invitation::all();
        $feedback = Feedback::all();
        return view('Admin.dashboard')
                    ->with('users',$users)
                    ->with('invitations',$invitations)
                    ->with('feedbacks',$feedback);
    }
}
