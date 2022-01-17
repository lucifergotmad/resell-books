<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockBuku extends Model
{
    use HasFactory;

    protected $table = 'tm_stock_buku';
    protected $fillable = ['kode_buku', 'total_berat', 'total_qty'];

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }
}
