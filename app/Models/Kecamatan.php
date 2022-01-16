<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    public function kota()
    {
        return $this->hasOne(Kota::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }
}
