<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
          'creditname' => 'required|string',
          'creditlimit' => 'required',
          'interestrate' => 'required|min:0.1|max:99',
          'expdate' => 'required',
          'creditcondition' => ''
      ];

      switch ($this->getMethod())
      {
        case 'POST':
          return $rules;
        case 'PUT':
          return [
            'id' => 'required|integer|exists:credits,id'
          ] + $rules; // и берем все остальные правила
        // case 'PATCH':
        case 'DELETE':
          return [
              'id' => 'required|integer|exists:credits,id',
          ];
      }
    }
}
