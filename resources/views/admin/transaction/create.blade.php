@extends('layouts.app')

@section('content')
    <div class="p-6">

        <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

            <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Transaksi</h2>

            <form action="{{ route('admin.transaction.store') }}" method="POST">
                @csrf
                @include('admin.transaction._form', ['transaction' => new App\Models\Transaction()])
            </form>

        </div>
    </div>
@endsection
