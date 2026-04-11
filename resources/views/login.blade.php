<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-8 pb-8 mt-4 habit-shadow-lg">
            <h1 class="text-3xl font-bold mb-4">
                Faça o login
            </h1>

            <p class="mb-2">
                Insira seus dados para acessar sua conta.
            </p>

            <form
              action="{{ route('auth.login') }}"
              method="POST"
              class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-2">

                    <label for="email">
                        Email
                    </label>

                    <input type="email" name="email" placeholder="your@email.com"
                        class="bg-white p-2 habit-shadow @error('email') border-red-500 @enderror">

                </div>
                @error('email')
                    <p class="text-red-500 text-sm font-bold text-center">
                        {{ $message }}
                    </p>
                @enderror

                <div class="flex flex-col gap-2 mb-2">

                    <label for="password">
                        Password
                    </label>

                    <div class="relative">
                        <input id="login-password" type="password" name="password" placeholder="********"
                            class="bg-white p-2 pr-12 w-full habit-shadow @error('password') border-red-500 @enderror">

                        <button
                            type="button"
                            data-toggle-password
                            data-target="login-password"
                            class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer"
                            aria-label="Mostrar senha">
                            <span data-eye-open class="hidden">
                                <x-icons.eye />
                            </span>
                            <span data-eye-closed>
                                <x-icons.eye-closed />
                            </span>
                        </button>
                    </div>

                </div>
                @error('password')
                    <p class="text-red-500 text-sm font-bold text-center">
                        {{ $message }}
                    </p>
                @enderror

                <button type="submit" class="p-2 bg-habit-blue habit-shadow-lg habit-btn mt-2">
                    Entrar
                </button>
            </form>

            <p class="text-center mt-4">
                Não tem uma conta? <a href="{{ route('site.register') }}" class="text-blue-500 underline hover:opacity-60 transition">Registrar-se</a>
            </p>

        </section>
    </main>

    <script>
        document.querySelectorAll('[data-toggle-password]').forEach((button) => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.target);

                if (!input) {
                    return;
                }

                const isPassword = input.type === 'password';

                input.type = isPassword ? 'text' : 'password';
                button.setAttribute('aria-label', isPassword ? 'Ocultar senha' : 'Mostrar senha');
                button.querySelector('[data-eye-open]')?.classList.toggle('hidden', !isPassword);
                button.querySelector('[data-eye-closed]')?.classList.toggle('hidden', isPassword);
            });
        });
    </script>
</x-layout>
