<nav class="flex flex-col content-center w-full px-6 py-2 font-sans text-center bg-white shadow sm:flex-row sm:text-left sm:justify-between sm:items-baseline">
    <div class="mb-2 sm:mb-0 inner">

        <a href="{{ route('home') }}" class="font-sans text-2xl font-bold no-underline text-grey-darkest hover:text-blue-dark">Laravel с нуля</a><br>
        <span class="text-xs text-grey-dark">Уроки от CutCode</span>

    </div>

    <div class="self-center sm:mb-0">
        @auth('web')
            <a href="{{ route('logout') }}" class="px-1 ml-2 no-underline text-md text-grey-darker hover:text-blue-dark">Выйти</a>
        @endauth

        @guest('web')
            <a href="{{ route('login') }}" class="px-1 ml-2 no-underline text-md text-grey-darker hover:text-blue-dark">Войти</a>
        @endguest
    </div>
</nav>