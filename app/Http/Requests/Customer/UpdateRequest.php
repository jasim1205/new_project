<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $r): array
    {
        $id=encryptor('decrypt',$r->uptoken);
        return [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:customers,email,'.$id,
        'contact_no' => 'required|string|max:20',
        'address' => 'required|string',
        'tin' => 'required|string',
        'bin' => 'required|string',
        ];
    }
}
