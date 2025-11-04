<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    public $timestamps = false;

    protected $fillable = [
        'nama_pengguna',
        'email',
        'password_hash',
        'profile_pict_url',
        'created_at',
    ];

    public function modeBaca()
    {
        return $this->hasMany(ModeBaca::class, 'id_pengguna');
    }

    public function bukuTerpinjam()
    {
        return $this->hasMany(BukuTerpinjam::class, 'id_pengguna');
    }

    public function highlightTersimpan()
    {
        return $this->hasMany(HighlightTersimpan::class, 'id_pengguna');
    }

    public function personalisasiBuku()
    {
        return $this->hasMany(PersonalisasiBuku::class, 'id_pengguna');
    }

    public function tambahBukuPengguna()
    {
        return $this->hasMany(TambahBukuPengguna::class, 'id_pengguna');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_pengguna');
    }
}
