<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenggatSewaDetail extends Model
{
    use HasFactory;

    protected $table = 'th_tenggat_sewa_detail';
    protected $fillable = ['no_sewa', 'kode_buku', 'awal_sewa', 'tenggat_sewa'];

    public function tenggat_sewa()
    {
        return $this->hasOne(TenggatSewa::class);
    }
}
