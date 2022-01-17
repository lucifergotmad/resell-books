<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tm_buku';
    protected $fillable = ['kode_buku', 'judul_buku', 'pengarang', 'harga_jual', 'harga_sewa', 'kode_kategori', 'berat', 'penerbit', 'tahun_terbit', 'harga_jual', 'harga_sewa'];

    public function kategori()
    {
        return $this->hasOne(Kategori::class);
    }

    public function stock_buku()
    {
        return $this->belongsTo(StockBuku::class);
    }
}
