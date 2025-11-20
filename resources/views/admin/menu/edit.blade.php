@extends('layouts.app')

@section('content')
    <div class="p-6">

        <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

            <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Menu</h2>

            <form action="{{ route('admin.menu.update', $menu) }}" method="POST">
                @csrf @method('PUT')
                @include('admin.menu._form', ['menu' => $menu])
            </form>

        </div>
    </div>
@endsection
