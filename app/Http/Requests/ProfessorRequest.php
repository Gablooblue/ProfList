<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
		'fname' => 'required|max:50',
		'lname' => 'required|max:50',
		'mname' => 'max:5',
		'class' => 'max:50',
		'school' => 'required',
        ];
    }
}
