<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProRequest extends FormRequest
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
            'sltCate' => 'required',
            'txtProName' => 'required',
            'txtPrice' => 'required|numeric',
            'txtDes' => 'required'
        ];
    }
    public function messages(){
        return [
            'sltCate.required' => 'Phải chọn Danh Mục Nước Uống!!!!',
            'txtProName.required' => 'Tên Nước Uống không được trống!!!!',
            'txtPrice.required' => 'Giá Nước Uống không được để trống',
            'txtPrice.numeric' => 'Giá Nướcề Uống phải là số!!!!',
            'txtDes.required' => 'Mô tả không được trống!!!'
        ];
    }
}
