<x-layout>
    <main class="py-10">
        <h1>
            Dashboard
        </h1>

        <p>
            Bem-vindo(a), {{ auth()->user()->name }}!
        </p>

        <div>
            <h2 class="text-x1 mt-4">
                Listagem dos seus hábitos:
            </h2>

            <ul class="flex flex-col grap-2">
                @forelse ($habits as $item)
                    <li class="pl-4">
                      <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl">
                            - {{ $item->name }}
                        </p>
                        <p>
                          [{{ $item->habitLogs()->count() }} registros]
                        </p>
                      </div>
                    </li>
                @empty
                    <p>
                      Ainda não há hábitos cadastrados.
                    </p>
                    <a href="/habito/cadastrar" class="bg-blue-500 text-white px-3 py-1 text-sm border-2 mt-4 inline-block rounded-md w-auto max-w-[220px] text-center">
                      Cadastre um novo hábito
                    </a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>
