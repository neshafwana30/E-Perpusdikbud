<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mode_baca extends Model
{
    use HasFactory;

    protected $table = 'mode_baca';
    protected $primaryKey = 'id_modebaca';
    public $timestamps = false;

    protected $fillable = [
        'id_pengguna',
        'gaya_tulisan',
        'brightness',
        'suhu_warna',
        'warna_dasar',
        'ukuran_font',
        'pembalik_halaman',
        'bab_buku',
        'darkmode',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
