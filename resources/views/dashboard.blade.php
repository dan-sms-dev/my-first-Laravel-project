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

        <div">
            <h2 class="text-lg mt-8 mb-2">
              {{ date('d/m/Y') }}
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="habit-shadow-lg p-2 bg-[#FFDAAC]">
                        <div class="flex gap-2 items-center">
                            <input type="checkbox" class="w-5 h-5 cursor-pointer"
                                {{ $item->is_completed ? 'checked' : '' }} disabled>
                            <p class="font-bold text-lg ">
                                {{ $item->name }}
                            </p>
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
