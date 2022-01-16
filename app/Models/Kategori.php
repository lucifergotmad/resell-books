<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'tm_kategori';
    protected $fillable = ['kode_kategori', 'nama_kategori'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}
