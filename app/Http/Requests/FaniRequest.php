<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FaniRequest extends Request
{
    // 	title 	content 	seen 	date 	img
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title'=>'required',
            'content'=>'required',
            'img'=>'required|max:1500|mimes:jpg,jpeg,png,bmp,tiff,gif,svg,jpe,jfif,tif'
        ];
    }
    public function attributes()
    {
        return [
            //
            'title'=>'عنوان خبر',
            'content'=>'متن خبر',
            'img'=>'تصویر'
        ];

    }
    public function messages()
    {
        return [

            'required'=>':attribute به درستی وارد نشده است',
            'max' => ':attribute نباید بیشتر از 1500 کیلو بایت باشد.',
            'mimes' => ':attribute فقط نوع فایل های jpg,jpeg,png,bmp,tiff,gif,svg,jpe,jfif,tif می تواند باشد.'
        ];
    }
}