<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuartoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'nivel_blindagem' => 'required|string|max:255',
            'capacidade' => 'required|integer|min:1',
            'preco_diaria' => 'required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome do quarto é obrigatório.',
            'nivel_blindagem.required' => 'Informe o nível de blindagem do quarto.',
            'capacidade.required' => 'Informe a capacidade do quarto.',
            'capacidade.integer' => 'A capacidade deve ser um número inteiro.',
            'preco_diaria.required' => 'Informe o preço da diária.',
            'preco_diaria.numeric' => 'O preço deve ser um valor numérico.',
        ];
    }
}