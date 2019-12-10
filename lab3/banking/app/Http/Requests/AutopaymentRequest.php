<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutopaymentRequest extends FormRequest
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
          'sender' => 'required|integer',
          'receiver' => 'required|integer',
          'everywhat' => 'required|string',
          'everynumber' => 'required|min:1|max:31',
          'frequency' => 'required|min:1|',
          'amount' => 'required|decimal',
          'comment' => 'text',
          'isactive' => 'required|boolean',
      ];

      switch ($this->getMethod())
      {
        case 'POST':
          return $rules;
        case 'PUT':
          return [
            'id' => 'required|integer|exists:autopayments,id'
          ] + $rules; // и берем все остальные правила
        // case 'PATCH':
        case 'DELETE':
          return [
              'id' => 'required|integer|exists:autopayments,id'
          ];
      }
    }
}
