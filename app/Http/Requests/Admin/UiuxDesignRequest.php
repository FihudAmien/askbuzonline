<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UiuxDesignRequest extends FormRequest
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
            'titleuiux' => 'required|max:255',
            'paragraphuiux' => 'required|max:2000',
            'imageuiux' => 'required|imagecontactit',
            'facebookuiux' => 'required|max:255',
            'emailuiux' => 'required|max:255',
            'whatsappuiux' => 'required|max:255'
        ];
    }
}
