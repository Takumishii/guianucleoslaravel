<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApunteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nucleo_id' => ['required', 'exists:nucleos,id'],
            'titulo' => ['required', 'min:5', 'max:100'],
            'contenido' => ['required', 'min:10'],
            'codigo_ejemplo' => ['nullable', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'nucleo_id.required' => 'Debe seleccionar un núcleo temático.',
            'nucleo_id.exists' => 'El núcleo seleccionado no existe.',
            'titulo.required' => 'El título es obligatorio.',
            'titulo.min' => 'El título debe tener al menos 5 caracteres.',
            'titulo.max' => 'El título no puede superar los 100 caracteres.',
            'contenido.required' => 'El contenido es obligatorio.',
            'contenido.min' => 'El contenido debe tener al menos 10 caracteres.',
            'codigo_ejemplo.max' => 'El código de ejemplo es demasiado extenso.',
        ];
    }
}