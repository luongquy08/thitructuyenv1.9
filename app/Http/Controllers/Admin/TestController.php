<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DateTime;
use App\Http\Requests;
use App\Http\Requests\TestAddRequest;
use App\Http\Requests\TestEditRequest;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Test;
use Auth;

class TestController extends Controller
{
    public function getTestAdd(){
        $subjectsData = Subject::select('id', 'name')->get()->toArray();
        return view('admin.module.test.add', ['subjectsData'=>$subjectsData]);
    }

    public function postTestAdd(TestAddRequest $request){
        $test = new Test;
        $test->subject_id = $request->sltSubject;
        $test->name = $request->txtTestName;
        $test->slug = str_slug($request->txtTestName);
        $test->user_id = Auth::user()->id;
        $test->created_at = new DateTime();
        $test->save();
        return redirect()->route('getTestList')->with(['flash_level'=>'result_msg', 'flash_message'=>'Thêm đề thi thành công']);
    }

    public function getTestList(){
        $testsData = Test::with('subject')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.test.list', ['testsData'=>$testsData]);
    }
    
    public function getTestDel($id){
        $test = Test::findOrFail($id);
        if(Auth::user()->id == 1 || Auth::user()->id == $test['user_id']){
            $test->delete();
            return redirect()->back()->with(['flash_level'=>'result_msg', 'flash_message'=>'Xóa đề thi thành công']);
        }
        return redirect()->route('getTestList')->with(['flash_level'=>'error_msg', 'flash_message'=>'Bạn không có quyền xóa đề thi này']);
    }
    
    public function getTestEdit($id){
        $testData = Test::with('user')->find($id);
        if(Auth::user()->id == 1 || Auth::user()->id == $testData['user_id']){
            $subjectsData = Subject::select('id', 'name')->get()->toArray();
            return view('admin.module.test.edit', ['testData'=>$testData, 'subjectsData'=>$subjectsData]);
        }
        return redirect()->route('getTestList')->with(['flash_level'=>'error_msg', 'flash_message'=>'Bạn không có quyền sửa đề thi này']);
    }
    
    public function postTestEdit(TestEditRequest $request, $id){
        $testData = Test::findOrFail($id);
        $testData->subject_id = $request->sltSubject;
        $testData->name = $request->txtTestName;
        $testData->slug = str_slug($request->txtTestName);
        $testData->save();
        return redirect()->route('getTestList')->with(['flash_level'=>'result_msg', 'flash_message'=>'Sửa đề thi thành công']);
    }
}