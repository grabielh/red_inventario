<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllInOneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'model' => 'required|string',
			'ram' => 'required|string',
			'storage' => 'required|string',
			'processor' => 'required|string',
			'img' => 'required|string',
        ];
    }
}
