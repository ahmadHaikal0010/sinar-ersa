<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['menu_id', 'jumlah', 'deskripsi', 'metode_transaksi'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
