<?php

namespace App\Http\Controllers\User;

use App\Models\Feedback;
use App\Models\Follow;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DateTime;

class HomeController extends Controller
{
    public function getHomePage(){
        $subjectsData = Subject::select('id', 'name')->get()->toArray();
        $testsData = Test::select('id', 'name', 'slug', 'subject_id')->get()->toArray();
        return view('user.pages.index', ['subjectsData'=>$subjectsData, 'testsData'=>$testsData]);
    }
    
    public function postHomePage(Request $request){
        $feedback = new Feedback;
        $feedback->name = $request->txtName;
        $feedback->email = $request->txtEmail;
        $feedback->phone = $request->txtPhone;
        $feedback->message = $request->txtMessage;
        $feedback->created_at = new DateTime();
        $feedback->save();

        $alert =  '<script type="text/javascript">alert("Cám ơn phản hồi của bạn!")</script>';
        $subjectsData = Subject::select('id', 'name')->get()->toArray();
        $testsData = Test::select('id', 'name', 'subject_id')->get()->toArray();
        return view('user.pages.index', ['subjectsData'=>$subjectsData, 'testsData'=>$testsData, 'alert'=>$alert]);
    }

    public function postFolow(Request $request){
//        $followCurrent = Follow::select('id')->where('email', $request->txtEmailFolow);
//        echo count($followCurrent);
//        if (count($followCurrent)>0){
//            $alert =  '<script type="text/javascript">alert("Email này đã được sử dụng để theo dõi, vui lòng chọn email khác!")</script>';
//            $subjectsData = Subject::select('id', 'name')->get()->toArray();
//            $testsData = Test::select('id', 'name', 'subject_id')->get()->toArray();
//            return view('user.pages.index', ['subjectsData'=>$subjectsData, 'testsData'=>$testsData, 'alert'=>$alert]);
//        }
        $follow = new Follow;
        $follow->email = $request->txtEmailFolow;
        $follow->created_at = new DateTime;
        $follow->save();
        $alert =  '<script type="text/javascript">alert("Cám ơn bạn đã theo dõi!")</script>';
        $subjectsData = Subject::select('id', 'name')->get()->toArray();
        $testsData = Test::select('id', 'name', 'subject_id')->get()->toArray();
        return view('user.pages.index', ['subjectsData'=>$subjectsData, 'testsData'=>$testsData, 'alert'=>$alert]);
    }
}
