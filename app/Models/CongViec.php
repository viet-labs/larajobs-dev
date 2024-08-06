<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongViec extends Model
{
    use HasFactory;

    protected $table = 'cong_viec';

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:Y-m-d',
            'updated_at' => 'datetime:Y-m-d',
            'ngay_het_han' => 'datetime:Y-m-d',
        ];
    }

    protected $fillable = [
        'tieu_de',
        'hinh_thuc_lam_viec',
        'loai_cong_viec',
        'dia_chi_lam_viec',
        'noi_dung',
        'muc_luong_toi_thieu',
        'muc_luong_toi_da',
        'ngay_het_han',
        'user_id',
        'to_chuc_id',
    ];

    public function toChuc()
    {
        return $this->belongsTo(ToChuc::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tuKhoas()
    {
        return $this->belongsToMany(TuKhoa::class);
    }
}
