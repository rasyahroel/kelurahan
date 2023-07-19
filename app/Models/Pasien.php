<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pasien',
        'nama',
        'alamat',
        'telp',
        'rt',
        'rw',
        'kelurahan_id',
        'tgl_lahir',
        'jenis_kelamin'
    ];

    public static function generateID()
    {
        $lastPasien = self::orderBy('id_pasien', 'desc')->first();

        if ($lastPasien) {
            $lastID = $lastPasien->id_pasien;
            $lastNumber = (int)substr($lastID, -6);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $formattedNumber = str_pad($newNumber, 6, '0', STR_PAD_LEFT);
        $formattedDate = date('ym');

        return $formattedDate . $formattedNumber;
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }
}
