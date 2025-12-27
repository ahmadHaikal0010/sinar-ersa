<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->paginate(5);
        $transactionCount = Transaction::count();
        $totalPendapatanBulanIni = Transaction::whereMonth('created_at', now()->month)->sum('jumlah');

        return view('admin.dashboard', compact('menus', 'transactionCount', 'totalPendapatanBulanIni'));
    }
}
