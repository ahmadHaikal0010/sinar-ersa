<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class PublicMenuController extends Controller
{
    public function show(Menu $menu)
    {
        return view('public.show_menu', compact('menu'));
    }

    public function beli(Menu $menu)
    {
        $pesan = urlencode(
            "Halo Admin Dapur Mami Ersa 👋\n\n" .
            "Saya ingin memesan:\n" .
            "🍽 Menu : {$menu->nama}\n" .
            "💰 Harga : Rp " . number_format($menu->harga, 0, ',', '.') . "\n\n" .
            "Terima kasih 🙏"
        );

        $noWa = "6283181441459";

        return redirect("https://wa.me/{$noWa}?text={$pesan}");
    }


}
