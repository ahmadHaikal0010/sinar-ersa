<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuImage extends Model
{
    protected $fillable = ['url', 'menu_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
