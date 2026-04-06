<x-layout>
    <main class="py-10">
        <h1 class="text-4xl font-bold text-center">
            Dashboard
        </h1>

        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 border-2 mt-4">

        <a href="{{ route('habits.create') }}" class="text-center p-2 border-2 bg-blue-500 text-white font-bold rounded-md w-auto max-w-[220px] block mx-auto mb-4">
          Cadastrar Hábito
        </a>

        @session('success')
        <div class="flex">
          <p class="bg-green-100 border border-green-400 text-green-700 p-3 mb-4 block">
            mensagem
            {{ session('success') }}
          </p>
        </div>
        @endsession

        <div class="flex flex-col gap-4 text-center">
            <h2 class="text-xl mt-4 font-bold">
                Listagem dos seus hábitos:
            </h2>

            <ul class="flex flex-col gap-2 text-center">
                @forelse ($habits as $item)
                    <li class="pl-4 text-center">
                      <div class="flex gap-2 items-center">
                        <p class="font-bold text-xl text-center">
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
                    <a href="{{ route('habits.create') }}" class="bg-blue-500 text-white px-3 py-1 text-sm border-2 mt-4 inline-block rounded-md w-auto max-w-[220px] text-center">
                      Cadastre um novo hábito
                    </a>
                @endforelse
                </section>
            </ul>
        </div>
    </main>
</x-layout>
