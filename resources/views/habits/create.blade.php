<x-layout>
    <main class="py-10">
      <h1 class="text-3xl font-bold mb-4 text-center">
        cadastrar novo hábito
      </h1>
      <form action="{{ route('habits.store') }}" method="POST">
        @csrf

        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 border-2 mt-4">
        <div class="flex flex-col gap-2 mb-2">

          <label for="name">
            Nome do hábito
          </label>

          <input
            type="text"
            name="name"
            placeholder="Ex: ler 10 páginas de um livro..."
            class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

        </div>
        @error('name')
          <p class="text-red-500 text-sm font-bold text-center">
            {{ $message }}
          </p>
        @enderror

        <button type="submit" class="bg-blue-500 text-white p-2">
          Cadastrar hábito
        </button>
        </section>
      </form>
    </main>
</x-layout>
