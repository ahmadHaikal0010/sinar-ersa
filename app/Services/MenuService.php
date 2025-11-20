<?php

namespace App\Services;

use App\Models\Menu;

class MenuService
{
    public function getAllMenu()
    {
        return Menu::with('images')->latest()->paginate(10);
    }

    public function store(array $data)
    {
        return Menu::create($data);
    }

    public function update(Menu $menu, array $data)
    {
        return $menu->update($data);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
    }

    public function load(Menu $menu)
    {
        return $menu->load('images');
    }
}
