<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Feedback;

class ContactController extends Controller
{
    public function index()
    {
        return view('Template.contact');
    }


    /**------------Store Contact Form----------------- */
    public function store(Request $request)
    {
        $fb = new Feedback;
        $fb->name = $request->name;
        $fb->email = $request->email;
        $fb->number = $request->number;
        $fb->msg = $request->msg;
        $fb->save();
        if ($fb) {
            return redirect()->route('index');
        }else {
            return redirect()->route('contact');
        }
    }
}
