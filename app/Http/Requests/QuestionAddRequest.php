<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QuestionAddRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtQuestion'=>'required',
//            'txtAnswer[1]'=>'required',
//            'txtAnswer[2]'=>'required',
//            'txtAnswer[3]'=>'required',
//            'txtAnswer[4]'=>'required',
            'rdoCorrectAnswer'=>'required',
            'sltTest'=>'required',
        ];
    }
    
    public function messages()
    {
        return [
            'txtQuestion.required'=>'Vui lòng nhập câu hỏi',
//            'txtAnswer[1].required'=>'Vui lòng nhập phương án A',
//            'txtAnswer[2].required'=>'Vui lòng nhập phương án B',
//            'txtAnswer[3].required'=>'Vui lòng nhập phương án C',
//            'txtAnswer[4].required'=>'Vui lòng nhập phương án D',
            'rdoCorrectAnswer.required'=>'Vui lòng chọn đáp án đúng của câu hỏi',
            'sltTest.required'=>'Vui lòng chọn đề thi'
        ];
    }
}
