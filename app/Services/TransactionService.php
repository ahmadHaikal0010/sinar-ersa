<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    public function getAllTransaction()
    {
        return Transaction::latest()->paginate(10);
    }

    public function store(array $data)
    {
        return Transaction::create($data);
    }

    public function update(Transaction $transaction, array $data)
    {
        return $transaction->update($data);
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
    }

    public function load(Transaction $transaction)
    {
        return $transaction;
    }
}
