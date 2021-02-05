<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ItDevelopmentRequest extends FormRequest
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
            'titleit' => 'required|max:255',
            'paragraphit' => 'required|max:2000',
            'imageit' => 'required|imagecontactit',
            'facebookit' => 'required|max:255',
            'emailit' => 'required|max:255',
            'whatsappit' => 'required|max:255'
        ];
    }
}
