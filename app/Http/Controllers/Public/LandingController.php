<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $menus = Menu::with('images')
            ->withCount('transactions')
            ->orderByDesc('transactions_count')
            ->limit(6)
            ->get();

        return view('public.landing', compact('menus'));
    }

    public function kuliner()
    {
        $menus = Menu::with('images')->where('kategori', 'Kuliner')->latest()->get();

        return view('public.menu-kuliner', compact('menus'));
    }

    public function olehOleh()
    {
        $menus = Menu::with('images')->where('kategori', 'Oleh-oleh')->latest()->get();

        return view('public.menu-oleh-oleh', compact('menus'));
    }
}
