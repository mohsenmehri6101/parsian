<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'img' => 'required|max:1500|mimes:jpg,jpeg,png'
        ];
    }
    public function attributes()
    {
        return[
            'email' => 'ایمیل ',
            'password' => 'گذرواژه',
            'fname' => 'نام ',
            'lname' => 'نام خانوادگی',
            'img' => 'تصویر'
        ];
    }
    public function messages()
    {
        return[
            'required' => ':attribute به درستی وارد نشده است.',
            'max' => ':attribute نباید بیشتر از 1000 کیلو بایت باشد.',
            'mimes' => ':attribute فقط از نوع فایل های jpeg-jpg-png می تواند باشد.'
        ];
    }
}