<header class="bg-white border-b-2 flex items-center justify-between p-4">
    {{-- logo --}}
    <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-blue">
        HT
    </a>

    <div class="flex items-center gap-4">
        {{-- GitHub --}}
        <a href="https://github.com/dan-sms-dev" target="_blank" rel="noopener noreferrer"
            class="flex gap-1 px-2 py-1 habit-btn habit-shadow-lg">
            <x-icons.git />
        </a>

        @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="habit-btn habit-shadow-lg  p-2 border-2">
                    Sair
                </button>
            </form>
        @endauth

        @guest
        <div class="flex gap-2">
            <a href="{{ route('site.register') }}" class="p-2 habit-btn habit-shadow-lg">
                Cadastrar-se
            </a>

            <a href="{{ route('site.login') }}" class="p-2 habit-btn habit-shadow-lg bg-habit-blue">
                Logar
            </a>
        </div>
        @endguest
    </div>
</header>
