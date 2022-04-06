<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marchendise extends Model
{
    use HasFactory;
    
    protected $table = 'marchendise';

    protected $fillable = [
        'nama',
        'jenis',
        'deskripsi',
        'harga',
        'gambar',
    ];

}
