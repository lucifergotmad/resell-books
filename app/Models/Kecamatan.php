<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'tm_kecamatan';
    protected $fillable = ['kode_kota', 'kode_kecamatan', 'nama_kecamatan'];

    public function kota()
    {
        return $this->hasOne(Kota::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }
}
