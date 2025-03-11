<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRedirectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'redirect_status' => 'required|boolean',
            'redirect' => 'nullable|string',
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('redirect', 'required|regex:/^(https?:\/\/)(.+)$/i', function ($input) {
            return $input->redirect_status == 1;
        });
    }

    public function messages()
    {
        return [
            'redirect.required' => 'Il campo URL è obbligatorio se il redirect è attivo.',
            'redirect.regex' => 'L\'URL deve iniziare con http:// o https:// e deve contenere un indirizzo valido dopo il protocollo.',
            'redirect_status.required' => 'Lo stato del redirect è obbligatorio.',
            'redirect_status.boolean' => 'Lo stato del redirect deve essere vero o falso.',
        ];
    }
}
