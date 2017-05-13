<?php

namespace App\Http\Controllers\User;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function getQuestion($id){
        $testData = Test::findOrFail($id);
        $questionsData = Question::select('id', 'content', 'correct_answer')->where('test_id', $id)->get()->toArray();
        $answersData = Answer::select('id', 'content', 'question_id')->get()->toArray();
        return view('user.pages.exam', ['questionsData'=>$questionsData, 'answersData'=>$answersData, 'testData'=>$testData]);
    }

    public function postQuestion(Request $requests, $id){
        $testData = Test::findOrFail($id);
        $questionsData = Question::select('id', 'content', 'correct_answer')->where('test_id', $id)->get()->toArray();
        $answersData = Answer::select('id', 'content', 'question_id')->get()->toArray();
        $count = 0;
        $resultArray = array();
        foreach ($questionsData as $questionItem){
            $name = 'question'.$questionItem['id'];
            $resultArray[$questionItem['id']] = $requests->$name;
            if($questionItem['correct_answer'] == $requests->$name){
                $count++;
            }
        }
//        foreach ($resultArray as $key => $item){
////                echo '<pre>';
//            echo $key.'=>'.$item;
//            echo '<br>';
//        }
        return view('user.pages.result')->with(['questionsData'=>$questionsData, 'answersData'=>$answersData, 'result'=>$count, 'resultArray'=>$resultArray, 'testData'=>$testData]);
    }

    public function getResult(){
       return view('user.pages.result');
    }
}
