<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
          'client' => 'required|integer',
          'credit' => 'int',
          'fromdate' => 'required|date',
          'todate' => 'required|date',
          'balance' => 'required|decimal|min:0',
          'status' => 'required|integer'
      ];

      switch ($this->getMethod())
      {
        case 'POST':
          return $rules;
        case 'PUT':
          return [
            'id' => 'required|integer|exists:accounts,id'
          ] + $rules; // и берем все остальные правила
        // case 'PATCH':
        case 'DELETE':
          return [
              'id' => 'required|integer|exists:accounts,id'
          ];
      }
    }
}
