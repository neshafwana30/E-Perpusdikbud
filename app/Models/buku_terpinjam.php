<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_terpinjam extends Model
{
    use HasFactory;

    protected $table = 'buku_terpinjam';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'id_pengguna', 'tanggal_mulai', 'tanggal_pengembalian',
        'durasi_pinjam', 'total_terbaca', 'progress_baca', 'status'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
