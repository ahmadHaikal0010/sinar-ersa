<?php

namespace App\Http\Requests\Admin\Image;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        $image = $this->route('image');
        return Gate::allows('update', $image);
    }

    public function rules(): array
    {
        return [
            'image' => ['nullable', 'image', 'max:2048'],
            'menu_id' => ['nullable', 'exists:menus,id'],
        ];
    }
}
