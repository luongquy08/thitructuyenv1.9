<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubjectAddRequest extends Request
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
            'txtSubjectName'=>'required|unique:uet_subjects,name|max:250'
        ];
    }
    
    public function messages()
    {
        return [
            'txtSubjectName.required'=>'Vui lòng nhập tên môn học',
            'txtSubjectName.unique'=>'Tên môn học đã tồn tại, vui lòng nhập tên khác',
            'txtSubjectName.max'=>'Tên môn học không được vượt quá 250 kí tự'

        ];
    }
}
