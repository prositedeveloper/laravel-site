@extends('layout.admin')

@section('title', isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью')

@section('content')
    <div class="container px-6 py-8 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">{{ isset($post) ? "Редактировать статью ID {$post->id}" : 'Добавить статью' }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form action="{{ isset($post) ? route('admin.posts.update', $post->id) : route('admin.posts.store') }}" method="post" enctype="multipart/form-data" class="mt-5 space-y-5">
                @csrf

                @if (isset($post))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 px-3 border border-gray-800 rounded @error('title') border-red-800 @enderror" placeholder="Название" value="{{ $post->title ?? '' }}" />

                @error('title')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="preview" type="text" class="w-full h-12 px-3 border border-gray-800 rounded @error('preview') border-red-800 @enderror" placeholder="Краткое описание" value="{{ $post->preview ?? '' }}" />

                @error('preview')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="description" type="text" class="w-full h-12 px-3 border border-gray-800 rounded @error('description') border-red-800 @enderror" placeholder="Описание" value="{{ $post->description ?? '' }}" />

                @error('description')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                @if (isset($post) && $post->img)
                    <div>
                        <img class="w-64 h-64" src="/storage/posts/{{ $post->img }}">
                    </div>
                @endif

                <input name="img" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('img')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <button type="submit" class="w-full py-3 font-medium text-center text-white bg-blue-900 rounded-md">Сохранить</button>
            </form>
        </div>
    </div>
@endsection