<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutusPackagesRequest extends FormRequest
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
            'title' => 'required|max:255',
            'imageAboutus1' => 'required|imageAboutus1',
            'paragraphAboutus1' => 'required|max:2000',
            'paragraphAboutus2' => 'required|max:2000'
        ];
    }
}
