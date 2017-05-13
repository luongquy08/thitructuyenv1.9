<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAddRequest extends Request
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
            'txtUser' => 'required',
            'txtEmail' => 'required|email|unique:uet_users,email',
            'txtPass' => 'required|min:5|max:50',
            'txtRepass' => 'required|same:txtPass',
            'rdoLevel' => 'required',
//            'avaImg'=>'required|image|mimes:jpeg,bmp,png|max:3000'
        ];
    }

    public function messages()
    {
        return [
            'txtUser.required' => 'Vui lòng nhập Username',
            'txtEmail.required' => 'Vui lòng nhập Email',
            'txtEmail.email' => 'Email không đúng định dạng',
            'txtEmail.unique' => 'Email đã tồn tại',
            'txtPass.required' => 'Vui lòng nhập password',
            'txtPass.min' => 'Mật khẩu phải trên 5 kí tự',
            'txtPass.max' => 'Mật khẩu không được vượt quá 50 kí tự',
            'txtRepass.required' => 'Vui lòng nhập Confirm password',
            'txtRepass.same' => 'Confirm password không khớp',
            'rdoLevel.required' => 'Vui lòng chọn level',
//            'avaImg.required'=>'Vui lòng chọn ảnh đại diện',
//            'avaImg.image'=>'Không phải định dạng ảnh, vui lòng chọn lại',
//            'avaImg.mimes'=>'Ảnh phải thuộc các định dạng jpeg, bmp,png',
//            'avaImg.max'=>'Vui lòng chọn ảnh có dung lượng dưới 3MB',
        ];
    }
}
