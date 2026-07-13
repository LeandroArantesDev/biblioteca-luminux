<x-layout>
    <section class="flex h-[calc(100dvh-4rem)] justify-center items-center">
        <x-shell class="flex flex-col justify-center items-center gap-5">
            @auth
                <h1 class="text-4xl font-petit font-extrabold text-center text-verde-pricipal">Olá, {{ auth()->user()->name }}!</h1>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf 
                    <button type="submit" class="btn-primario"><span><i class="bi bi-box-arrow-in-left"></i></span>Sair</button>
                </form> 
            @endauth
            @guest
                <h1 class="text-4xl font-petit font-extrabold text-center text-verde-pricipal">Bem vindo à Biblioteca Luminux! Você não está logado</h1>
            @endguest    
        </x-shell>
    </section>
</x-layout>