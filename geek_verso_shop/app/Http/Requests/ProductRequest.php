<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string|max:255',
            'product_quantity' => 'required|integer|min:1',
            'product_price' => 'required|numeric|min:0',
            'product_rating' => 'required|numeric|min:0|max:5',
            'product_file_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'product_name.required' => 'O nome do produto é obrigatório.',
            'product_description.required' => 'A descrição é obrigatória.',
            'product_quantity.required' => 'A quantidade é obrigatória.',
            'product_price.required' => 'O preço é obrigatório.',
            'product_rating.required' => 'A avaliação é obrigatória.',
            'product_file_name.required' => 'A imagem do produto é obrigatória.',
            'product_file_name.image' => 'O arquivo deve ser uma imagem.',
            'product_file_name.mimes' => 'A imagem deve ser JPG, PNG ou JPEG',
        ];
    }
}
