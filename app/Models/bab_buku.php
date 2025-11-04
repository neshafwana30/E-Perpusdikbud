<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bab_buku extends Model
{
    use HasFactory;

    protected $table = 'bab_buku';
    protected $primaryKey = 'id_bab';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'nomor_bab', 'judul_bab', 'isi_bab'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
