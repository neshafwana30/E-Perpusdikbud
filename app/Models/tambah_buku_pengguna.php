<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambah_buku_pengguna extends Model
{
    use HasFactory;

    protected $table = 'tambah_buku_pengguna';
    protected $primaryKey = 'id_tambah_pengguna';
    public $timestamps = false;

    protected $fillable = [
        'id_tambah', 'id_pengguna'
    ];

    public function tambahBuku()
    {
        return $this->belongsTo(TambahBuku::class, 'id_tambah');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
