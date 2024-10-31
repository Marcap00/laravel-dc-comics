<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:255',
            'category' => 'required|string|min:3|max:255',
            'type' => 'required|string|min:3|max:255',
            'ability' => 'required|string|min:3|max:255',
            'stage_of_evolution' => 'required|string|min:1|max:3',
            'height' => 'required|numeric|min:0|max:999.99',
            'weight' => 'required|numeric|min:0|max:999.99',
            'image' => 'required|url',
        ];
    }
}
