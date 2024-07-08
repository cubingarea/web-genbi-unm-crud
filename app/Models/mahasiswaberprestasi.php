<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswaberprestasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'prodi', 'fakultas', 'angkatan', 'prestasi'];
}
