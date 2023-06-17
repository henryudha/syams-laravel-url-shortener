<?php

namespace App\Http\Requests\User;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserFetchRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "per_page" => "sometimes|integer|min:1"
        ];
    }

    public function validationData() {
        // return $this->query()->all();
        return $this->query->all();
    }

    public function failedValidation(Validator $validator): void {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
        ], 400));
    }
}
