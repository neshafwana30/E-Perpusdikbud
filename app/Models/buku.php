<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;

    protected $fillable = [
        'judul_buku', 'sinopsis', 'total_halaman', 'size_buku',
        'sampul_url', 'tahun_terbit', 'stok_buku', 'jumlah_bab', 'penerbit', 'created_at'
    ];

    public function babBuku()
    {
        return $this->hasMany(BabBuku::class, 'id_buku');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_buku', 'id_buku', 'id_genre');
    }

    public function penulis()
    {
        return $this->belongsToMany(Penulis::class, 'buku_penulis', 'id_buku', 'id_penulis');
    }

    public function bukuTerpinjam()
    {
        return $this->hasMany(BukuTerpinjam::class, 'id_buku');
    }

    public function highlightTersimpan()
    {
        return $this->hasMany(HighlightTersimpan::class, 'id_buku');
    }

    public function personalisasiBuku()
    {
        return $this->hasMany(PersonalisasiBuku::class, 'id_buku');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_buku');
    }

    public function bukuPopuler()
    {
        return $this->hasMany(BukuPopuler::class, 'id_buku');
    }

    public function ratingKeseluruhan()
    {
        return $this->hasOne(RatingKeseluruhan::class, 'id_buku');
    }
}
