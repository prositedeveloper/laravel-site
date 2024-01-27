<div class="max-w-xl px-4 py-8">
    <div class="bg-white shadow-2xl" >
        <div>
            <a href="{{ route('posts.show', $post->id) }}">
                <img src="/storage/posts/{{ $post->img }}">
            </a>
        </div>
        <div class="px-4 py-2 mt-2 bg-white">
            <h2 class="text-2xl font-bold text-gray-800">{{ $post->title }}</h2>
            <p class="px-2 my-3 mr-1 text-xs text-gray-700 sm:text-sm">
                {{ $post->preview }}
            </p>
        </div>
    </div>
</div>