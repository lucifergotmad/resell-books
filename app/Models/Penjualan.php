<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'tt_penjualan';
    protected $fillable = ['no_penjualan', 'kode_member', 'tanggal', 'total_berat', 'total_harga', 'total_qty', 'diskon'];

    public function member()
    {
        return $this->hasOne(Member::class, 'kode_member', 'kode_member');
    }

    public function penjualan_detail()
    {
        return $this->belongsTo(PenjualanDetail::class, 'no_penjualan', 'no_penjualan');
    }
}
