<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Transaction\StoreTransactionRequest;
use App\Http\Requests\Admin\Transaction\UpdateTransactionRequest;
use App\Models\Transaction;
use App\Models\Menu;
use App\Services\TransactionService;
use Illuminate\Support\Facades\Gate;

class TransactionController extends Controller
{
    protected TransactionService $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = $this->transactionService->getAllTransaction();

        return view('admin.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::pluck('nama', 'id');
        return view('admin.transaction.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $this->transactionService->store($request->validated());
        return redirect()->route('admin.transaction.index')->with('success', 'Data transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $transaction = $this->transactionService->load($transaction);
        return view('admin.transaction.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        $menus = Menu::pluck('nama', 'id');
        return view('admin.transaction.edit', compact('transaction', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $this->transactionService->update($transaction, $request->validated());
        return redirect()->route('admin.transaction.index')->with('success', 'Data transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        Gate::abilities('delete', $transaction);
        $this->transactionService->destroy($transaction);
        return redirect()->route('admin.transaction.index')->with('success', 'Data transaksi berhasil dihapus.');
    }
}
