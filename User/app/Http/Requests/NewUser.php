<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class NewUser extends FormRequest
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
            'name'      => 'required',
            'email'         => 'required|email|unique:user,email',
            'pass'      =>'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Email chưa đúng định dạng',
            'email.unique'=>'Email bị trùng',
            'pass.required'=>'Bạn chưa nhập mật khẩu',
        ];
    }


}
