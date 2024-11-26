<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'weight' => 'required|numeric|between:1,9999.9',
            'target_weight' => 'required|numeric|between:1,9999.9',
        ];
    }

    public function messages()
    {
        return[
            'weight.required' => '現在の体重を入力してください',
            'weight.regex' => '4桁までの数字で入力してください',
            'weight.regex' => '小数点は1桁で入力してください',
            'target_weight.required' =>'目標の体重を入力してください',
            'target_weight.regex' => '4桁までの数字で入力してください',
            'target_weight.regex' => '小数点は1桁で入力してください',
        ];
    }
}
