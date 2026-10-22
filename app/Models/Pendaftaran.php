<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    // Menentukan kolom apa saja yang boleh diisi melalui inputan form
    protected $fillable = [
        'nama',
        'email',
        'institusi',
        'nomor_hp',
    ];
}
