<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
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

            'concept'=>'required|string|max:255',
            'budget_type'=>'required',
            'amount' => 'required|int|min:0',
            

           
        ];
    }

    public function messages()
    {
        return[
            'concept.required' => '* El Concepto del Presupuesto es requerido',
            'budget_type.required' => ' Debe Seleccionar el tipo de Presupuesto',
            'amount.required' => '* El campo Descripción es requerido'
            
        ];
    }


}
