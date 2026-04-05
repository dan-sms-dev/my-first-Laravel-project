<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 border-2 mt-4">
            <h1 class="text-3xl font-bold mb-4">
                Registre-se
            </h1>

            <p class="mb-2">
                Preencha os campos para se cadastrar
            </p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-2">

                    <label for="name">
                        Nome
                    </label>

                    <input type="text" name="name" placeholder="Seu nome"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

                </div>
                @error('name')
                    <p class="text-red-500 text-sm font-bold">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col gap-2 mb-2">

                    <label for="email">
                        Email
                    </label>

                    <input type="email" name="email" placeholder="your@email.com"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">

                </div>
                @error('email')
                    <p class="text-red-500 text-sm font-bold">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col gap-2 mb-2">

                    <label for="password">
                        Password
                    </label>

                    <input type="password" name="password" placeholder="********"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">

                </div>
                @error('password')
                    <p class="text-red-500 text-sm font-bold">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col gap-2 mb-2">

                    <label for="password_confirmation">
                        Confirme sua senha
                    </label>

                    <input type="password" name="password_confirmation" placeholder="********"
                        class="bg-white p-2 border-2 @error('password_confirmation') border-red-500 @enderror">

                </div>
                @error('password')
                    <p class="text-red-500 text-sm font-bold">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit" class="bg-blue-500 text-white p-2 mt-4">
                    Cadastrar
                </button>
            </form>

            <p class="text-center mt-4">
                Já tem uma conta? <a href="{{ route('site.login') }}"
                    class="text-blue-500 underline hover:opacity-60 transition">Faça login</a>
            </p>

        </section>
    </main>
</x-layout>
