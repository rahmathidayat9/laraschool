<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Artikel;

class KategoriArtikel extends Model
{
    use HasFactory;

    protected $table = 'kategori_artikel';

    protected $fillable = [
    	'nama_kategori','slug',
    ];

    public function artikel()
    {
    	return $this->hasMany(Artikel::class,'kategori_artikel_id');
    }
}
