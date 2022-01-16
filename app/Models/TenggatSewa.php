<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenggatSewa extends Model
{
    use HasFactory;

    protected $table = 'th_tenggat_sewa';
    protected $fillable = ['no_sewa', 'kode_member'];

    public function tenggat_sewa_detail()
    {
        return $this->belongsTo(TenggatSewaDetail::class);
    }

}
