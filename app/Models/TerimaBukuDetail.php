<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerimaBukuDetail extends Model
{
    use HasFactory;

    protected $table = 'tt_terima_buku_detail';
    protected $fillable = ['no_terima', 'kode_buku', 'judul_buku', 'pengarang', 'berat', 'qty', 'harga_beli', 'kategori', 'penerbit', 'tahun_terbit'];

    public function terima_buku()
    {
        return $this->hasOne(TerimaBuku::class);
    }
}
