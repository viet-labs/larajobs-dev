<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuKhoa extends Model
{
    use HasFactory;

    protected $table = 'tu_khoa';

    protected $fillable = [
        'ten_hien_thi',
        'slug',
    ];

    public function congViecs()
    {
        return $this->belongsToMany(CongViec::class);
    }

    public function toChucs()
    {
        return $this->belongsToMany(ToChuc::class);
    }
}
