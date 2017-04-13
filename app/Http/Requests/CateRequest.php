<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'sltStore' => 'required',
            'txtCateName' => 'required',
            'fileCateName' => 'required|image'
        ];
    }
    public function messages(){
        return[
            'sltStore.required' => 'Phải chọn Cửa hàng!!!!',
            'txtCateName.required' => 'Tên danh mục không được trống !!!',
            'txtCateName.unique' => 'Tên danh mục đã bị trùng !!!',
            'fileCateName.required' => 'Hình ảnh không được trống !!!',
            'fileCateName.image' => 'Không phải là hình ảnh !!!'
        ];

    }
}
