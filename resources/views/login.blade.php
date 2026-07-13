<x-layout2>
    <div class="flex justify-center items-center w-screen h-screen">
        <div class="grid grid-cols-2 w-3/5 h-3/4 rounded-xl bg-neutral-100 overflow-hidden shadow-2xl border border-stone-400">
            <div class="flex flex-col justify-center items-center gap-3 p-2 relative">
                <img src="{{ asset('assets/biblioteca.jpg') }}" class="absolute z-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/70"></div>
                <i class="bi bi-stars text-white text-5xl z-100"></i>
                <h1 class="text-white text-4xl font-petit font-extrabold z-100">Biblioteca Luminux</h1>
                <p class="text-white text-center text-lg z-100 w-3/4">Explore milhares de livros, conecte-se com outros leitores e embarque em jornadas inesquecíveis.</p>
            </div>
            <div class="flex justify-center items-center">
                <form action="{{ route('auth.login') }}" method="post" class="w-6/7 flex flex-col justify-center items-baseline gap-4">
                    @csrf
                    <div>
                        <h2 class="font-bold text-2xl text-verde-pricipal-escuro">Fazer Login</h2>
                        <p class="text-stone-600 text-bas">Entre com seus dados para acessar o sistema.</p>
                    </div>
                    <x-input>
                        <label for="email">E-mail</label>
                        <div class="relative w-full">
                            <span class="absolute left-3 bottom-2 pointer-events-none"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="exemplo@email.com" class="bg-white p-2 border border-stone-400 focus:outline-verde-pricipal rounded-lg w-full pl-10">
                        </div>
                        @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </x-input>
                    <x-input>
                        <label for="password">Senha</label>
                        <a href="#" class="text-sm w-full text-right absolute top-0.5 right-0">Esqueceu a senha?</a>
                        <div class="relative w-full">
                            <span class="absolute left-3 bottom-2.5 pointer-events-none"><i class="bi bi-lock"></i></span>
                            <span class="absolute right-3 bottom-2 cursor-pointer" id="eye"><i class="bi bi-eye"></i></span>
                            <input type="password" name="password" id="password" placeholder="********" class="bg-white p-2 border border-stone-400 focus:outline-verde-pricipal rounded-lg w-full pl-10">
                        </div>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </x-input>
                    <input type="submit" value="Login" class="btn-primario w-full">
                    <div class="w-full flex flex-col justify-center items-center gap-2">
                        <p class="text-center w-full text-sm text-stone-600">Não tem uma conta? <a href="#" class="text-verde-pricipal font-semibold w-full text-center hover:text-verde-pricipal-hover">Criar conta</a></p>
                        <a href="{{ route('site.home') }}" class="text-verde-pricipal w-full text-center hover:text-verde-pricipal-hover text-sm">Voltar para página principal</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout2>
