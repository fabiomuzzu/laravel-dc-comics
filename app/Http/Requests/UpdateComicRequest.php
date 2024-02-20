<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title.required'        => 'Il campo Comic name è obbligatorio.',
            'title.max'             => 'Il campo deve avere massimo 255 caratteri',
            'description.required'  => 'Il campo Description è obbligatorio.',
            'price.required'        => 'Il campo Price è obbligatorio',
            'price.max'             => 'Il campo Price deve avere massimo 11 caratteri',
            'series.required'       => 'Il campo Series è obbligatorio.',
            'series.max'            => 'Il campo deve avere massimo 255 caratteri',
            'sale_date.required'    => 'Il campo Sale Date è obbligatorio.',
            'sale_date.date'        => 'Il campo Sale Date non è valido.',
            'type.required'         => 'Il campo Type è obbligatorio.',
            'type.max'              => 'Il campo deve avere massimo 255 caratteri',
        ];
    }
}
