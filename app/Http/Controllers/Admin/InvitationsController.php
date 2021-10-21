<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Invitation;
class InvitationsController extends Controller
{
    /**---------All Invitation----------- */
    public function index()
    {
        $invitations = Invitation::orderBy('created_at','DESC')->simplePaginate(10);
        return view('Admin.Invitation.invitations')
                        ->with('invitations',$invitations);
    }

    /**---------Single Invitation----------- */
    public function SingleInvitation($slug)
    {
        $invi = Invitation::where('slug',$slug)->first();
        return view('Admin.Invitation.invitation_details')
                            ->with('invite',$invi);
    }
}
