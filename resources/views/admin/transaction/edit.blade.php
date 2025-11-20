@extends('layouts.app')

@section('content')
    <div class="p-6">

        <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

            <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Transaksi</h2>

            <form action="{{ route('admin.transaction.update', $transaction) }}" method="POST">
                @csrf @method('PUT')
                @include('admin.transaction._form', ['transaction' => $transaction])
            </form>

        </div>
    </div>
@endsection
