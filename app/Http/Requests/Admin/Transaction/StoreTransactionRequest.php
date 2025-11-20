<?php

namespace App\Http\Requests\Admin\Transaction;

use App\Models\Transaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('create', Transaction::class);
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'jumlah' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'metode_transaksi' => ['required', 'in:tunai,transfer'],
        ];
    }
}
