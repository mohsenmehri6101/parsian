<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CvRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    /**
     * 	id 	title 	architect 	employer 	services 	year_construction 	useri 	location 	content 	seen 	img_1 	img_2 	date
     */
    public function rules()
    {
        return [
            //
            'title'=>'required',
            'architect'=>'required',
            'employer'=>'required',
            'services'=>'required',
            'year_construction'=>'required',
            'useri'=>'required',
            'location'=>'required',
            'content'=>'required',
            'img_1'=>'required|max:1500|mimes:jpg,jpeg,png,bmp,tiff,gif,svg,jpe,jfif,tif',
            'img_2'=>'required|max:1500|mimes:jpg,jpeg,png,bmp,tiff,gif,svg,jpe,jfif,tif'
        ];
    }
    public function attributes()
    {
        return [
            //
            'title'=>'عنوان',
            'architect'=>'معمار',
            'employer'=>'کارفرما',
            'services'=>'خدمات',
            'year_construction'=>'سال ساخت',
            'useri'=>'کاربری',
            'location'=>'موقعیت',
            'content'=>'توضیحات',
            'img_1'=>'تصویر',
            'img_2'=>'تصویر'
        ];

    }
    public function messages()
    {
        return [
            //
            'required'=>':attribute به درستی وارد نشده است',
            'max' => ':attribute نباید بیشتر از 1500 کیلو بایت باشد.',
            'mimes' => ':attribute فقط نوع فایل های jpg,jpeg,png,BMP,tiff,gif,svg می تواند باشد.'
        ];
    }
}