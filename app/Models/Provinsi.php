<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'tm_provinsi';

    protected $fillable = ['kode_provinsi', 'nama_provinsi'];

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }

}
