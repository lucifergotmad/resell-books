<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $table = 'tm_alamat';
    protected $fillable = ['kode_member', 'alamat', 'kode_provinsi', 'kode_kota', 'kode_kecamatan', 'kode_pos'];

    public function member()
    {
        return $this->hasOne(Member::class);
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }
}
