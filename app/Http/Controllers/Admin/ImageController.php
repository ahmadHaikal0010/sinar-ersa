<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Image\StoreImageRequest;
use App\Http\Requests\Admin\Image\UpdateImageRequest;
use App\Models\Menu;
use App\Models\MenuImage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        $images = MenuImage::latest()->paginate(10);
        return view('admin.image.index', compact('images'));
    }

    public function create()
    {
        $menus = Menu::pluck('nama', 'id');
        return view('admin.image.create', compact('menus'));
    }

    public function store(StoreImageRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('menu_images', 'public');
            $data['url'] = Storage::url($path); // store a public URL like /storage/menu_images/...
        }

        MenuImage::create([
            'url' => $data['url'] ?? null,
            'menu_id' => $data['menu_id'] ?? null,
        ]);

        return redirect()->route('admin.image.index')->with('success', 'Image berhasil ditambahkan.');
    }

    public function show(MenuImage $image)
    {
        return view('admin.image.show', compact('image'));
    }

    public function edit(MenuImage $image)
    {
        $menus = Menu::pluck('nama', 'id');
        return view('admin.image.edit', compact('image', 'menus'));
    }

    public function update(UpdateImageRequest $request, MenuImage $image)
    {
        $data = $request->validated();

        // if new image uploaded, store it and replace url
        if ($request->hasFile('image')) {
            // try to delete old file if it points to storage
            if ($image->url && str_starts_with($image->url, '/storage/')) {
                $oldPath = ltrim(str_replace('/storage/', '', $image->url), '/');
                Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('menu_images', 'public');
            $data['url'] = Storage::url($path);
        }

        $image->update([
            'url' => $data['url'] ?? $image->url,
            'menu_id' => $data['menu_id'] ?? $image->menu_id,
        ]);

        return redirect()->route('admin.image.index')->with('success', 'Image berhasil diperbarui.');
    }

    public function destroy(MenuImage $image)
    {
        Gate::abilities('delete', $image);
        if ($image->url && str_starts_with($image->url, '/storage/')) {
            $oldPath = ltrim(str_replace('/storage/', '', $image->url), '/');
            Storage::disk('public')->delete($oldPath);
        }
        $image->delete();
        return redirect()->route('admin.image.index')->with('success', 'Image berhasil dihapus.');
    }
}
