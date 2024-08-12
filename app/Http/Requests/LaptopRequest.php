<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaptopRequest extends FormRequest
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
			'dimensions' => 'required|string',
			'power_supply' => 'required|string',
			'battery_package' => 'required|string',
			'processor' => 'required|string',
			'memory' => 'required|string',
			'storage' => 'required|string',
			'monitor' => 'required|string',
			'keyboard' => 'required|string',
			'connectors_slots' => 'required|string',
			'security_features' => 'required|string',
			'wireless_features' => 'required|string',
			'img' => 'string',
        ];
    }
}
