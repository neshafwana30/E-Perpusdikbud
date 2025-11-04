<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personalisasi_buku extends Model
{
    use HasFactory;

    protected $table = 'personalisasi_buku';
    protected $primaryKey = 'id_personalisasi';
    public $timestamps = false;

    protected $fillable = [
        'id_pengguna', 'id_buku'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
