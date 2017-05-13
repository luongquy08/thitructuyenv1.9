<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function getFeedBackList(){
        $feedbacksData = Feedback::select('id', 'name', 'email', 'phone', 'message', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.feedback.list', ['feedbacksData'=>$feedbacksData]);
    }

    public function getFeedBackDetail($id){
        $feedbackData = Feedback::findOrFail($id);
        return view('admin.module.feedback.detail', ['feedbackData'=>$feedbackData]);
    }
}
