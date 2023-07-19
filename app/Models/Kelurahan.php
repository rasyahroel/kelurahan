<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'camat',
        'kota'
    ];

    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }
}
