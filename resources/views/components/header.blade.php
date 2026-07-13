<header class="h-16 sticky top-0 left-0 z-1000 bg-neutral-50">
    <x-shell class="flex justify-between items-center h-full">
        <div class="flex justify-between items-center gap-3 group cursor-pointer">
            <span class="text-2xl w-10 h-10 bg-verde-pricipal flex justify-center items-center text-white rounded-xl group-hover:scale-105 group-hover:bg-verde-pricipal-hover"><i class="bi bi-stars"></i></span>
            <p class="text-verde-pricipal text-xl group-hover:text-verde-pricipal-hover font-petit font-extrabold">Biblioteca Luminux</p>
        </div>
        @guest
            <nav class="flex justify-center items-center gap-4">
                <a href="#hero" class="text-stone-600 px-3 py-2 rounded-xl hover:bg-neutral-100 border-b-2 border-transparent hover:text-verde-pricipal hover:border-verde-pricipal">Início</a>
                <a href="#funcionalidades" class="text-stone-600 px-3 py-2 rounded-xl hover:bg-neutral-100 border-b-2 border-transparent hover:text-verde-pricipal hover:border-verde-pricipal">Funcionalidades</a>
                <a href="#como-funciona" class="text-stone-600 px-3 py-2 rounded-xl hover:bg-neutral-100 border-b-2 border-transparent hover:text-verde-pricipal hover:border-verde-pricipal">Como funciona</a>
            </nav>
            <a href="{{ route('site.login') }}" class="flex gap-3 text-stone-600 px-3 py-2 rounded-xl hover:bg-neutral-100 border-b-2 border-transparent hover:text-verde-pricipal hover:border-verde-pricipal"><span><i class="bi bi-box-arrow-in-right"></i></span>Entrar</a>
        @endguest
        @auth
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf 
                <button type="submit" class="flex gap-3 text-stone-600 px-3 py-2 rounded-xl hover:bg-neutral-100 border-b-2 border-transparent hover:text-verde-pricipal hover:border-verde-pricipal cursor-pointer"><span><i class="bi bi-box-arrow-in-left"></i></span>Sair</button>
            </form> 
        @endauth
    </x-shell>
</header>
