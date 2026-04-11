<x-layout>
    <main class="py-10 min-h-[calc(100vh-160px)] px-4">

        <x-navbar />

        @session('success')
        <div class="flex justify-center">
            <p class="bg-green-100 border border-green-400 text-green-700 p-3 mb-4 block">
                {{ session('success') }}
            </p>
        </div>
        @endsession

        <div>
            <h2 class="text-lg mt-8 mb-2">
                Configurações dos seus hábitos:
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                <li class="habit-shadow-lg p-2 bg-[#FFDAAC]">
                    <div class="flex gap-2 items-center">
                        <p class="font-bold text-lg ">
                            {{ $item->name }}
                        </p>
                        <a class="bg-white border text-black p-1 hover:opacity-60 cursor-pointer" href="{{ route('habits.edit', $item->id) }}">
                            <x-icons.edit />
                        </a>
                        <form action="{{ route('habits.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 border text-white p-1 hover:opacity-60 cursor-pointer">
                                <x-icons.trash />
                            </button>
                        </form>
                    </div>
                </li>
                @empty
                <p class="text-center">
                    Ainda não há hábitos cadastrados.
                </p>
                <a href="{{ route('habits.create') }}"
                    class="bg-blue-500 text-white text-center px-3 py-1 rounded-md ">
                    Cadastre um novo hábito
                </a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>
