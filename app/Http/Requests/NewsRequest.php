<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsRequest extends Request
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
            //
            'title'=>'required',
            'content'=>'required',
        ];
    }
    public function attributes()
    {
        return [
            //
            'title'=>'عنوان خبر',
            'content'=>'متن خبر',
        ];

    }
    public function messages()
    {
        return [
            //
            'required'=>':attribute به درستی وارد نشده است'
        ];
    }
}
