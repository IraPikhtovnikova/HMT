<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        return [
          'fullname'    => 'required|string',
          'phone'       => 'required|string',
          'passport'    => 'required|string',
          'password'    => 'required|string',
        ];

        switch ($this->getMethod())
          {
            case 'POST':
              return $rules;
            case 'PUT':
              return [
                'id' => 'required|integer|exists:clients,id',
                'fullname' => [
                  'required',
                ]
              ] + $rules; // и берем все остальные правила
            // case 'PATCH':
            case 'DELETE':
              return [
                  'id' => 'required|integer|exists:clients,id',
              ];
          }
    }
}
