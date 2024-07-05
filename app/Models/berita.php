<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class berita extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = ['judul', 'penulis', 'content', 'tanggal', 'gambar'];
}
