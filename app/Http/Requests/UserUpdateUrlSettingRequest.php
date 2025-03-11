<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateUrlSettingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'url_setting' => 'required|string|unique:cards,url_setting,' . $this->route('card')->id,
        ];
    }
}
