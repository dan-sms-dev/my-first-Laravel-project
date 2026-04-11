<div>
    <nav>
        <ul class="flex gap-4 items-center">
            <li>
                <a href="{{ route('habits.index') }}"
                    class="{{ Route::is('habits.index') ? 'font-bold underline' : '' }} text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Hoje
                </a>
            </li>
            <li>
                <a href="@" class="text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Historico
                </a>
            </li>
            <li>
                <a href="@" class="text-md border-r-3 border-habit-blue pr-2 hover:underline">
                    Calendario
                </a>
            </li>
            <li>
                <a href="{{ route('habits.settings') }}" class="{{ Route::is('habits.settings') ? 'font-bold underline' : '' }} text-md hover:underline">
                    Gerenciar hábitos
                </a>
            </li>
        </ul>
    </nav>
</div>
