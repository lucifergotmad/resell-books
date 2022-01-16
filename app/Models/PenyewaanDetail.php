<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyewaanDetail extends Model
{
    use HasFactory;

    protected $table = 'tt_penyewaan_detail';
    protected $fillable = ['no_sewa', 'kode_buku', 'berat', 'qty', 'hari', 'harga_sewa'];

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }

    public function penyewaan()
    {
        return $this->hasOne(Penyewaan::class);
    }

}
