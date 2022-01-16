<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanDetail extends Model
{
    use HasFactory;

    protected $table = 'tt_penjualan_detail';
    protected $fillable = ['no_penjualan', 'kode_buku', 'berat', 'qty', 'harga_jual'];

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }

    public function penjualan()
    {
        return $this->hasOne(Penjualan::class);
    }

}
