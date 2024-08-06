<?php

namespace App\Http\Requests\Admin\Directory\TuKhoa;

use Illuminate\Foundation\Http\FormRequest;

class TuKhoaUpdateRequest extends FormRequest
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
            'ten_hien_thi' => 'required|min:3|max:50',
            'slug' => 'required',
        ];
    }
}
