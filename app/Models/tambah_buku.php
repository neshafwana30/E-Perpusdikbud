<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambah_buku extends Model
{
    use HasFactory;

    protected $table = 'tambah_buku';
    protected $primaryKey = 'id_tambah';
    public $timestamps = false;

    protected $fillable = [
        'judul_buku', 'penerbit', 'penulis', 'tahun_terbit'
    ];

    public function pengguna()
    {
        return $this->belongsToMany(Pengguna::class, 'tambah_buku_pengguna', 'id_tambah', 'id_pengguna');
    }
}
