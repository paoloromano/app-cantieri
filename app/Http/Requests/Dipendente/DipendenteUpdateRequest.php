<?php

namespace App\Http\Requests\Dipendente;

use Illuminate\Foundation\Http\FormRequest;

class DipendenteUpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'      => ['required', 'string', 'max:255'],
            'cognome'   => ['required', 'string', 'max:255'],
        ];
    }
}
