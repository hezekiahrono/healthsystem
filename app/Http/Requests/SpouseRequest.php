<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpouseRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
			
            'name'=> 'required',
            'birthday'=> 'required',
            'idNumber'=> 'required',
            'address'=> 'required',
            'residence'=> 'required',
            'estate'=> 'required',
            'town'=> 'required',
            'county'=> 'required',
            'occupation'=> 'required',
            'gender'=> 'required',
             'phone'=> 'required',
             'user_id' => 'required'

        ];
    }
}
