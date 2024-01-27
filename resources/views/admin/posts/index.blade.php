@extends('layout.admin')

@section('title', 'Статьи')

@section('content')
    <div class="container px-6 py-8 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Статьи</h3>

        <div class="mt-8">
            <a href="{{ route('admin.posts.create') }}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                        class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                Заголовок</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900">{{ $post->title }}</div>
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-indigo-600 hover:text-indigo-900">Редактировать</a>

                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post"
                                        onsubmit="if (confirm('Вы точно хотите удалить пост?')) {return true} else {return false}">
                                            @csrf

                                            @method('DELETE')

                                            <button type="submit" class="text-red-600 hover:text-red-900">Удалить</button>
                                        
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="py-5">
            {{ $posts->links('partials.custom-pagination') }}
        </div>
    </div>
@endsection