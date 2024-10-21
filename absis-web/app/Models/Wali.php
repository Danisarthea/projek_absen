<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
