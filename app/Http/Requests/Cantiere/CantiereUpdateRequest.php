<?php

namespace App\Http\Requests\Cantiere;

use Illuminate\Foundation\Http\FormRequest;

class CantiereUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'   => ['required', 'string', 'max:255'],
            'descrizione'   => ['required', 'string', 'max:255'],
            'data_inizio'  => ['required', 'date'],
            'data_fine' => ['date'],
        ];
    }
}
