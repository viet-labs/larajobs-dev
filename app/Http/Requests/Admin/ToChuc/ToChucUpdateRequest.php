<?php

namespace App\Http\Requests\Admin\ToChuc;

use Illuminate\Foundation\Http\FormRequest;

class ToChucUpdateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'ten_cong_ty' => 'required|min:3|max:255',
            'dia_chi_lien_he' => 'required',
            'website_url' => 'required',
            'user_id' => 'required',
        ];
    }
}
