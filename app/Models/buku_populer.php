<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_populer extends Model
{
    use HasFactory;

    protected $table = 'buku_populer';
    protected $primaryKey = 'id_populer';
    public $timestamps = false;

    protected $fillable = [
        'id_buku', 'bulan', 'jumlah_baca'
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku');
    }
}
