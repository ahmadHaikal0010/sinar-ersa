@extends('layouts.app')

@section('content')
    <div class="p-6">

        <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

            <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Image</h2>

            <form action="{{ route('admin.image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.image._form', ['image' => new App\Models\MenuImage()])
            </form>

        </div>
    </div>
@endsection
