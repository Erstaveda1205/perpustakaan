<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';

    protected $fillable = ['kode', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telfon', 'alamat', 'foto'];
}
