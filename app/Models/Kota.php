<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'tm_kota';
    protected $fillable = ['kode_provinsi', 'kode_kota', 'nama_kota'];

    public function provinsi()
    {
        return $this->hasOne(Provinsi::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }
}
