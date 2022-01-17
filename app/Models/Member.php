<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'tm_member';
    protected $fillable = ['kode_member', 'nama_member', 'no_ktp', 'no_hp', 'tanggal_lahir'];
}
