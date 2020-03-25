<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'isbn'=>'required|unique:books',
            'title'=>'required|unique:books',
            'nbExemple'=>'required|integer',
            'image'=>'mimes:jpg,png',
            'Select_id_categorie'=>'required',
            'Select_id_auteu'=>'required'
        ];
    }
}
