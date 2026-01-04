<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'harga',
    ];

    /**
     * Relasi ke tabel menu_images
     */
    public function images()
    {
        return $this->hasMany(MenuImage::class);
    }

    /**
     * Accessor: harga dalam format Rupiah
     * contoh: 15 -> Rp 15.000
     */
    public function getHargaRupiahAttribute()
    {
        return 'Rp ' . number_format(($this->harga ?? 0) * 1000, 0, ',', '.');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
