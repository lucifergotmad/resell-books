<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $table = "tm_rekening";
    protected $fillable = ['kode_bank', 'no_rekening', 'atas_nama'];

    public function bank()
    {
        return $this->hasOne(Bank::class);
    }
}
