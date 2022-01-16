<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoAwal extends Model
{
    use HasFactory;

    protected $table = 'tt_saldo_awal';
    protected $fillable = ['no_transaksi', 'tanggal', 'total_berat', 'total_qty', 'total_harga'];
}
