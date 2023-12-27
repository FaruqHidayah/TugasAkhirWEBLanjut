<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    
    use HasFactory;

    protected $table = 'mhs2';
    protected $primarykey = 'nim';
    
    protected $fillable = [
        'nim',
        'nama',
        'jk',
        'prodi',
        'alamat',
        'foto',
    ];
}
