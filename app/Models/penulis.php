<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;

    protected $table = 'penulis';
    protected $primaryKey = 'id_penulis';
    public $timestamps = false;

    protected $fillable = [
        'nama_penulis', 'foto_url', 'lahir_tanggal', 'tempat_lahir',
        'pendidikan', 'karya_lain', 'biografi'
    ];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'buku_penulis', 'id_penulis', 'id_buku');
    }
}
