@extends('layout.app')

@section('title', $post->title)

@section('content')
    <div>
        <div class="max-w-xl px-4 py-8 m-auto">
            <div class="bg-white shadow-2xl" >
                <div>
                    <img src="/storage/posts/{{ $post->img }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    <h2 class="text-2xl font-bold text-gray-800">{{ $post->title }}</h2>
                    <p class="px-2 my-3 mr-1 text-xs text-gray-700 sm:text-sm">
                       {{ $post->description }}
                    </p>
                </div>
            </div>


            <div>
                <section class="mt-4 rounded-b-lg">
                    <form action="{{ route('comment', $post->id) }}" method="post">
                        @csrf
                        <textarea name="text" class="w-full p-4 mb-4 text-2xl border-0 rounded-lg shadow-inner focus:shadow-outline @error('text') border-red-500 @enderror" placeholder="Ваш комментарий..." spellcheck="false"></textarea>

                        @error('text')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="w-full px-4 py-2 text-lg font-bold text-white bg-purple-400 rounded-lg shadow-md ">Написать </button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        <!--     comment-->
                        @foreach ($post->comments as $comment)
                            <div class="flex flex-col items-center justify-center p-3 mb-4 bg-white rounded-lg shadow-lg md:items-start">
                                <div class="flex flex-row justify-center mr-2">
                                    <h3 class="text-lg font-semibold text-center text-purple-600 md:text-left ">{{ $comment->user->name }}</h3>
                                </div>


                                <p style="width: 90%" class="text-lg text-center text-gray-600 md:text-left ">{{ $comment->text }}</p>
                            </div>
                        @endforeach
                        <!--  comment end-->
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection