<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUser'   =>  'required|unique:users,name',
            'txtPass'   =>  'required',
            'txtPass'   =>  'required|same:txtPass',
            'txtEmail'  =>  'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/|unique:users,email',
            'txtPhone'  =>  'required|regex:/(01)[0-9]{9}/'
        ];
    }
	public function messages () {
        		return[
		            'txtUser.required'   => 'Vui lòng điền tên đăng nhập',
		            'txtUser.unique'     => 'Tên đăng nhập đã tồn tại',
		            'txtPass.required' 	 => 'Vui lòng điền mật khẩu',
		            'txtRePass.required' => 'Vui lòng điền lại mật khẩu',
		            'txtEmail.required'	 => 'Vui lòng điền email',
		            'txtEmail.regex'	 => 'Email không tồn tại',
		            'txtRePass.same' 	 => 'Mật khẩu không trùng khớp',
                    'txtPhone.regex'     => 'Vui lòng điền đúng số điện thoại',
                    'txtEmail.unique'    => 'Email đăng ký này đã tồn tại'
	            ];
    }
}
