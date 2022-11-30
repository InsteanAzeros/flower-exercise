<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlowerRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'price' => 'required|numeric|between:2,100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is mandatory !',
            'price.required' => 'Price is mandatory.',
            'price.numeric' => 'Price must be numeric between 2 and 100e',
            'price.between' => 'Price must be numeric between 2 and 100e'
        ];
    }
}
