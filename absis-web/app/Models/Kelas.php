<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function wali()
    {
        return $this->hasOne(Wali::class, 'wali_kelas', 'id');
    }
}
