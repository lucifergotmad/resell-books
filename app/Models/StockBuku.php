<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockBuku extends Model
{
    use HasFactory;

    protected $table = 'tm_stock_buku';

    public function buku()
    {
        return $this->hasOne(Buku::class);
    }
}
