<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoAwalDetail extends Model
{
    use HasFactory;

    protected $table = 'tt_saldo_awal_detail';
    protected $fillable = ['no_transaksi', 'kode_buku', 'judul_buku', 'pengarang', 'berat', 'qty', 'harga_beli', 'kategori', 'penerbit', 'tahun_terbit'];

    public function saldo_awal()
    {
        return $this->hasOne(SaldoAwal::class);
    }
}
