<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
        return [

                'name' => 'required|min:2|max:10|',
                'email' =>'required|email',
                'phone' =>'required|min:11|max:11'
            
        ];
    }

    public function messages()
    {
        return 
        [
            'name.required' => 'Поле имя является обязательным ',
            'email.required' => 'Поле email является обязательным ',
            'phone.required' => 'Поле телефона является обязательным ',
            'phone.min' => 'Телефонный номер должен состоять из 11 цифр',
            'name.min' => 'Имя должно быть не менее 2 символов',
            'name.max' => 'Имя должно быть не более 10 символов',
            'email.email' => 'Введите корректный email',
            'phone.max' => 'Телефонный номер должен состоять из 11 цифр',
            
        ];
    }
}
