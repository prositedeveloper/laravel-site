@extends('layout.app')

@section('title', 'Авторизация')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen space-y-10 bg-white">
        <div class="p-5 bg-white rounded shadow-xl w-96">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form action="{{ route('login_process') }}" method="post" class="mt-5 space-y-5">
                @csrf
                <input name="email" type="email" class="w-full h-12 px-3 border border-gray-800 rounded @error('email') border-red-500 @enderror" placeholder="Email" />

                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <input name="password" type="password" class="w-full h-12 px-3 border border-gray-800 rounded @error('password') border-red-500 @enderror" placeholder="Пароль" />

                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div>
                    <a href="#" class="p-2 font-medium text-blue-900 rounded-md hover:bg-blue-300">Забыли пароль?</a>
                </div>

                <div>
                    <a href="{{ route('register') }}" class="p-2 font-medium text-blue-900 rounded-md hover:bg-blue-300">Регистрация</a>
                </div>

                <button type="submit" class="w-full py-3 font-medium text-center text-white bg-blue-900 rounded-md">Войти</button>
            </form>
        </div>
    </div>
@endsection