<?php

namespace App\Http\Requests\Admin\CongViec;

use Illuminate\Foundation\Http\FormRequest;

class CongViecUpdateRequest extends FormRequest
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
            'tieu_de' => 'required|min:3|max:255',
            'hinh_thuc_lam_viec' => 'required',
            'loai_cong_viec' => 'required',
            'dia_chi_lam_viec' => 'required',
            'noi_dung' => 'required',
            'muc_luong_toi_thieu' => 'required',
            'muc_luong_toi_da' => 'required',
            'ngay_het_han' => 'required',
            'user_id' => 'required',
            'to_chuc_id' => 'required',
        ];
    }
}
