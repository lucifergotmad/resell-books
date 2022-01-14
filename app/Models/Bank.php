<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $table = "tm_bank";
    protected $fillable = ['kode_bank', 'nama_bank'];

    public function rekening() {
        return $this->belongsTo(Rekening::class);
    }
}
