<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjaviOglasRequest extends FormRequest
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
            'proizvodjac' => 'required',
            'model' => 'required',
            'stanje_id' => 'required',
            'kilometraza' => 'required',
            'oznaka' => 'required',
            'kubikaza' => 'required',
            'godiste' => 'required',
            'lokacija' => 'required',
            'gorivo_id' => 'required',
            'snaga' => 'required',
            'boja' => 'required|min:2',
            'pogon_id' => 'required',
            'mijenjac' => 'required',
            'opis' => 'required',
            'cijena' => 'required',
            'photo_id' => 'required',
        ];
    }
}
