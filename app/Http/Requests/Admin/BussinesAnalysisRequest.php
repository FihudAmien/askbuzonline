<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BussinesAnalysisRequest extends FormRequest
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
            'titleba' => 'required|max:255',
            'paragraphba' => 'required|max:2000',
            'imageba' => 'required|imagecontactit',
            'facebookba' => 'required|max:255',
            'emailba' => 'required|max:255',
            'whatsappba' => 'required|max:255'
        ];
    }
}
