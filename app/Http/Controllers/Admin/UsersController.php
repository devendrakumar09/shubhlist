<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Models\invitation;

class UsersController extends Controller
{
    /**---------Addl Users----------- */
    public function index()
    {
        $users = User::orderBy('created_at','DESC')->simplePaginate(10);
        return view('Admin.Users.users')
                    ->with('users',$users);
    }

    /**---------Uer Details----------- */
    public function usersDetails($id)
    {
        $user = User::find($id);        
        $invitations = Invitation::where('user_id',$id)->simplePaginate(4);
        return view('Admin.Users.users_details')
                        ->with('user',$user)
                        ->with('invitations',$invitations);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =  User::find($id);                           
        if ($user) {
            $user->delete();
            return redirect()->route('admin-users');
        }else {
            return redirect()->back(); 
        }
    }
}
