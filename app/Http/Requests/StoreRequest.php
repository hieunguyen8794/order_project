<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'txtStoName' => 'required',
            'txtAddress' => 'required',
            'txtIntro' => 'required|min:10'
        ];
    }
    public function messages(){
        return [
            'txtStoName.required' => 'Tên Cửa Hàng không được trống !!!',
            'txtAddress.required' => 'Địa Chỉ không được trống !!!',
            'txtIntro.required' => 'Giới Thiệu không được trống !!!',
            'txtIntro.min' => 'Giới Thiệu ít nhất phải có 10 ký tự !!!',
        ];
    }
}
