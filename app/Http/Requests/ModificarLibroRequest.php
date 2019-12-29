<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModificarLibroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // De momento
        //return $this->user()->checkBiblio();
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
            'titulo' => 'required',
            'obtenidos' => 'required|integer|min:1',
            'disponibles' => 'required|integer|between:0,' . $this->obtenidos,
        ];
    }
}
