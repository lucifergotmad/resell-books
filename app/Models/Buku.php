<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tm_buku';
    protected $fillable = ['harga_jual', 'harga_sewa'];

    public function kategori()
    {
        return $this->hasOne(Kategori::class);
    }
}
