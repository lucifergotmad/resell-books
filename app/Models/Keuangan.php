<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table = 'tm_keuangan';
    protected $fillable = ['no_rekening', 'saldo'];

    public function rekening()
    {
        return $this->hasOne(Rekening::class);
    }
}
