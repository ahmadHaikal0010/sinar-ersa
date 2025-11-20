<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'kategori', 'harga'];

    public function images()
    {
        return $this->hasMany(MenuImage::class);
    }
}
