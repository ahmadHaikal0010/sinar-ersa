@extends('layouts.app')

@section('content')
    <div class="p-6">

        <div class="bg-[#C8D47F] p-6 rounded-2xl shadow-md max-w-4xl mx-auto">

            <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Image</h2>

            <form action="{{ route('admin.image.update', $image) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                @include('admin.image._form', ['image' => $image])
            </form>

        </div>
    </div>
@endsection
