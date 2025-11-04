<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;

    protected $table = 'genre';
    protected $primaryKey = 'id_genre';
    public $timestamps = false;

    protected $fillable = ['nama_genre'];

    public function buku()
    {
        return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
