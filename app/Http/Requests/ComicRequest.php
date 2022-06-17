<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            //
            'title' => 'required|max:60',
            'thumb' => 'required',
            'description' => 'required',
            'price' => 'required|max:6',
            'series' => 'required|max:60',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:30',
        ];
    }
}
