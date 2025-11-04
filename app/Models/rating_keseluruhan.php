<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating_keseluruhan extends Model
{
    use HasFactory;

    protected $table = 'rating_keseluruhan';
    protected $primaryKey = 'id_rating';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'rerata_rating', 'jumlah_1', 'jumlah_2',
        'jumlah_3', 'jumlah_4', 'jumlah_5'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
