<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre_buku extends Model
{
    use HasFactory;

    protected $table = 'genre_buku';
    protected $primaryKey = 'id_genre_buku';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'id_genre'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }
}
