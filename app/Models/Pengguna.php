<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Model
{
    use SoftDeletes;

    protected $fillable = ['nik', 'nama', 'alamat', 'tanggal_lahir', 'email', 'nomor_telepon'];
    protected $dates = ['deleted_at'];
}
