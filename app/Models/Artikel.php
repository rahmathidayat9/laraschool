<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\KategoriArtikel;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
    	'judul','slug','deskripsi','thumbnail','slug','user_id','kategori_artikel_id',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function kategoriArtikel()
    {
    	return $this->belongsTo(KategoriArtikel::class);
    }

    public function getThumbnail()
    {
    	return 'uploads/img/artikel/'.$this->thumbnail;
    }
}
