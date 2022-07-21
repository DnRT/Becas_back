<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storebeca_talentoRequest extends FormRequest
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
            //
        ];
    }
    protected function failedValidation(Validator $validator):void{
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors()   
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }
    public function messages(){
        return [
            
        ];
    }
}
