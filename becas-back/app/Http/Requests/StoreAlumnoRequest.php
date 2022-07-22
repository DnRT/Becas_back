<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class StoreAlumnoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'rut' => 'required|unique:alumno',
            'apellido' => 'required',
            'correo' => 'required|unique:alumno',
            'contrasena' => 'required',
            'edad' => 'required',
            'direccion' => 'required',
            'ubicacion_archivos' => 'required',
            'id_beca' => 'required'
        ];
    }
    protected function failedValidation(Validator $validator):void{
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors()   
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
    public function messages(){
        return [
            'nombre.required' => 'El nombre es requerido',
            'apellido.required' => 'El apellido es requerido',
            'contrasena.required' => 'La contrasena es requerido',
            'rut.unique' => 'El rut ya fue ingresado',
            'correo.unique' => 'El correo ya fue ingresado',
            'edad.required' => 'La edad es requerida',
            'direccion.required' => 'La direccion es requerido',
            'ubicacion_archivos.required' => 'Error al crear carpeta',
            'id_beca.required' => 'Error registrar'
        ];
    }
}
