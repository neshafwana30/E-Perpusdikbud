<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_penulis extends Model
{
    use HasFactory;

    protected $table = 'buku_penulis';
    protected $primaryKey = 'id_buku_penulis';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'id_penulis'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
}
