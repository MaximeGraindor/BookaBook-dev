<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'cover_path' => 'required',
            'name' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'ISBN' => 'required|integer',
            'public_price' => 'required|integer',
            'student_price' => 'required|integer'
        ];
    }
}
