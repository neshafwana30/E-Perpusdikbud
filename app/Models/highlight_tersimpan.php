<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class highlight_tersimpan extends Model
{
    use HasFactory;

    protected $table = 'highlight_tersimpan';
    protected $primaryKey = 'id_highlight';
    public $timestamps = false;

    protected $fillable = [
        'id_pengguna', 'id_buku', 'teks', 'halaman', 'tanggal_simpan', 'warna'
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
