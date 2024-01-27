@extends('layout.app')

@section('title', 'Регистрация')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen space-y-10 bg-white">
        <div class="p-5 bg-white rounded shadow-xl w-96">
            <h1 class="text-3xl font-medium">Регистрация</h1>

            <form action="{{ route('register_process') }}" method="post" class="mt-5 space-y-5">
                @csrf

                <input name="name" type="text" class="w-full h-12 px-3 border border-gray-800 rounded @error('name') border-red-500 @enderror" placeholder="Имя" />

                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="email" type="email" class="w-full h-12 px-3 border border-gray-800 rounded @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="password" type="password" class="w-full h-12 px-3 border border-gray-800 rounded @error('password') border-red-500 @enderror" placeholder="Пароль" />

                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="password_confirmation" type="password" class="w-full h-12 px-3 border border-gray-800 rounded @error('password_confirmation') border-red-500 @enderror" placeholder="Подтверждение пароля" />

                @error('password_confirmation')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div>
                    <a href="{{ route('login') }}" class="p-2 font-medium text-blue-900 rounded-md hover:bg-blue-300">Есть аккаунт?</a>
                </div>

                <button type="submit" class="w-full py-3 font-medium text-center text-white bg-blue-900 rounded-md">Зарегистрироваться</button>
            </form>
        </div>
    </div>
@endsection