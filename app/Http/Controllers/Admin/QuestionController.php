<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\QuestionAddRequest;
use App\Http\Requests\QuestionEditRequest;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Test;
use DateTime;
use Auth;

class QuestionController extends Controller
{
    public function getQuestionAdd(){
        $questionsData = Question::select('id', 'content', 'created_at')->get()->toArray();
        $testsData = Test::select('id', 'name', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
        return view('admin.module.question.add', ['questionsData'=>$questionsData, 'testsData'=>$testsData, 'oldSelectTest'=>'']);
    }

    public function postQuestionAdd(QuestionAddRequest $request){
        $question = new Question;
        $question->content = $request->txtQuestion;
        $question->test_id = $request->sltTest;
        $question->correct_answer = $request->rdoCorrectAnswer;
        $question->source = $request->txtSource;
        $question->user_id = Auth::user()->id;
        $question->created_at = new DateTime();
        $question->save();

        for ($i = 1; $i <= count($request->txtAnswer); $i++) {
            $answer = new Answer;
            $answer->question_id  = $question->id;
            $answer->content = $request->txtAnswer[$i];
            $answer->created_at = new DateTime();
            $answer->save();
            if($i == $request->rdoCorrectAnswer){
                $question->correct_answer = $answer->id;
                $question->save();
            }
        }
        $old = $request->sltTest;
        $testsData = Test::select('id', 'name')->orderBy('id', 'DESC')->get()->toArray();
        $questionsData = Question::select('id', 'content', 'created_at')->where('test_id', $old)->get()->toArray();
        $result_msg = 'result_msg';
        $flash_message = 'Thêm câu hỏi thành công';
        return view('admin.module.question.add', ['questionsData'=>$questionsData, 'testsData'=>$testsData, 'oldSelectTest'=>$old, 'flash_level'=>$result_msg, 'flash_message'=>$flash_message]);
    }

    public function getQuestionDel($id){
        $currenUserID = Auth::user()->id;
        $questionDel = Question::find($id);
        $testUserID = Test::find($questionDel['test_id']);
        if($currenUserID == 1 || $currenUserID == $questionDel['user_id'] || $currenUserID == $testUserID['user_id']){
            $question = Question::findOrFail($id);
            $question->delete($id);
            return redirect()->back()->with(['flash_level'=>'result_msg', 'flash_message'=>'Xóa câu hỏi thành công']);
        }
        return redirect()->back()->with(['flash_level'=>'error_msg', 'flash_message'=>'Bạn không có quyền xóa câu hỏi này']);
    }

    public function getQuestionEdit($id){
        $questionEditData = Question::with('user')->findOrFail($id);
        $questionsData = Question::select('id', 'content', 'created_at')->get()->toArray();
        $testsData = Test::select('id', 'name')->orderBy('id', 'DESC')->get()->toArray();
        $answersData = Answer::select('id', 'content')->where('question_id', $id)->get()->toArray();

        return view('admin.module.question.edit', ['questionsData'=>$questionsData, 'testsData'=>$testsData, 'questionEditData'=>$questionEditData, 'answersData'=>$answersData]);
    }

    public function postQuestionEdit(QuestionEditRequest $request, $id){
        $question = Question::findOrFail($id);
        $question->content = $request->txtQuestion;
        $question->test_id = $request->sltTest;
        $question->correct_answer = $request->rdoCorrectAnswer;
        $question->source = $request->txtSource;
        $question->updated_at = new DateTime();
        $question->save();

        $arrayAnswer = $request->txtAnswer;

        foreach ($arrayAnswer as $key => $value){
            $answer = Answer::findOrFail($key);
            $answer->content = $value;
            $answer->updated_at = new DateTime();
            $answer->save();
        }
        return redirect()->route('getQuestionAdd')->with(['flash_level'=>'result_msg', 'flash_message'=>'Cập nhật câu hỏi thành công']);
    }
    
    public function getQuestionList($id){
        $questionsData = Question::select('id', 'content', 'created_at')->where('test_id', $id)->get()->toArray();
        $testsData = Test::findOrFail($id);
        return view('admin.module.question.list', ['questionsData'=>$questionsData, 'testsData'=>$testsData]);
    }
}