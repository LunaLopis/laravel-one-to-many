<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required|max:50'
        ];
        
    }
    public function messages(){
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve essere lungo massimo 50 caratteri'
        ];
    }
}
