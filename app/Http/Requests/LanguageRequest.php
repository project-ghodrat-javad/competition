<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LanguageRequest extends Request
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
            'name' => 'required'
        ];
    }


    public function attributes(){

        return [

            'name' => 'نام زبان '

        ];

    }

    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. '
//            'name.max' => ':attribute بیشتر از کارکتر مجاز است'

        ];

    }

}
