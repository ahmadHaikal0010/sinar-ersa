<?php

namespace App\Http\Requests\Admin\Image;

use App\Models\MenuImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Gate::allows('create', MenuImage::class);
    }

    public function rules(): array
    {
        return [
            'image' => ['required', 'image', 'max:2048'],
            'menu_id' => ['nullable', 'exists:menus,id'],
        ];
    }
}
