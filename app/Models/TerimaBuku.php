<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerimaBuku extends Model
{
    use HasFactory;

    protected $table = 'tt_terima_buku';
    protected $fillable = ['no_terima', 'tanggal', 'total_berat', 'total_harga', 'total_qty'];

}
