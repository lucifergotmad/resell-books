<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;

    protected $table = 'tt_penyewaan';
    protected $fillable = ['no_sewa', 'kode_member', 'tanggal', 'total_berat', 'total_harga', 'total_qty', 'diskon'];

    public function member()
    {
        return $this->hasOne(Member::class);
    }

    public function penyewaan_detail()
    {
        return $this->belongsTo(PenyewaanDetail::class);
    }
}
