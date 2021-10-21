<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback; 
class FeedbacksController extends Controller
{
    /**-----------All Feedbacks---------------- */
    public function index()
    {
        $feedbacks = Feedback::orderBy('created_at','DESC')->simplePaginate(10);
        return view('Admin.FeedBack.feedbacks')
                        ->with('feedbacks',$feedbacks);
    }

    /**-----------Single Feedbacks---------------- */
    public function feedback($id)
    {
        return view('Admin.FeedBack.feedback_details');
    }
}
