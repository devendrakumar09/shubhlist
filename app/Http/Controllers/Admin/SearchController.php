<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        
        $users = User::where('email','LIKE','%'. $request->search .'%')->simplePaginate(10);        
        return view('Admin.users.search')
                    ->with('users',$users);
        
    }
}
