@extends('layout.app')

@section('title', 'Главная страница')

@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 gap-10 mt-10 mb-20 md:grid-cols-3">
         @foreach ($posts as $post)
            @include('posts.partials.item', ['post' => $post])
         @endforeach   
    </div>
@endsection