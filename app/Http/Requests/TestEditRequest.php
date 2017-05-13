<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestEditRequest extends Request
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
            'txtTestName'=>'required|max:250',
            'sltSubject'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'txtTestName.required'=>'Vui lòng nhập tên đề thi',
            'txtTestName.max'=>'Tên đề thi không được vượt quá 250 kí tự',
            'sltSubject.required'=>'Vui lòng chọn môn học'
        ];
    }
}
