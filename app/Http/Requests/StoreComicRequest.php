<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title'         => 'required|string|max:255',
            'description'   => 'required',
            'price'         => 'required|string|max:11',
            'series'        => 'required|string|max:255',
            'sale_date'     => 'required|date',
            'type'          => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Il campo Titolo è obbligatorio.',
            'title.max'             => 'Il campo Titolo deve avere massimo 255 caratteri',
            'description.required'  => 'Il campo Descrizione è obbligatorio.',
            'price.required'        => 'Il campo Prezzo è obbligatorio',
            'price.max'             => 'Il campo Prezzo deve avere massimo 11 caratteri',
            'series.required'       => 'Il campo Serie è obbligatorio.',
            'series.max'            => 'Il campo Serie deve avere massimo 255 caratteri',
            'sale_date.required'    => 'Il campo Data di vendita è obbligatorio.',
            'sale_date.date'        => 'Il campo Data di vendita non è valido.',
            'type.required'         => 'Il campo Tipo è obbligatorio.',
            'type.max'              => 'Il campo Tipo deve avere massimo 255 caratteri',
        ];
    }
}
