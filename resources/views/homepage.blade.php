<x-layout>
    <section class="h-[calc(100dvh-4rem)]" id="hero">
        <x-shell class="flex h-full flex-col gap-10 justify-center items-center">
            <h1 class="text-8xl font-petit font-extrabold text-center text-verde-pricipal-escuro">O Sistema Definitivo para sua Biblioteca</h1>
            <p class="text-xl text-stone-600 text-center">Descubra um universo de conhecimento e aventura ao alcance das suas mãos. Explore milhares de livros, conecte-se com outros leitores e embarque em jornadas inesquecíveis.</p>
            <div class="flex gap-5 justify-center items-center">
                <a href="{{ route('site.login') }}" class="btn-primario">Começar agora</a>
                <a href="#" class="btn-secundario">Explore o catálogo</a>
            </div>
        </x-shell>
    </section>
    <section id="funcionalidades">
        <x-shell class="flex h-full flex-col gap-10 justify-center items-center py-15">
            <h2 class="text-4xl font-petit font-extrabold text-center text-verde-pricipal">Funcionalidades</h2>
            <div class="grid grid-cols-3 gap-10">
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-person-fill-check"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Gestão Inteligente</h3>
                    <p class="text-xl text-stone-600 text-center">Controle total sobre empréstimos e devoluções.</p>
                </article>
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-card-list"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Catálogo Digital</h3>
                    <p class="text-xl text-stone-600 text-center">Organize milhares de títulos com facilidade.</p>
                </article>
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-window-fullscreen"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Painel de usuário</h3>
                    <p class="text-xl text-stone-600 text-center">Experiência personalizada para acompanhar o seu progresso.</p>
                </article>
            </div>
        </x-shell>
    </section>
    <section id="como-funciona">
        <x-shell class="flex h-full flex-col gap-10 justify-center items-center py-15">
            <h2 class="text-4xl font-petit font-extrabold text-center text-verde-pricipal">Como Funciona</h2>
            <div class="grid grid-cols-3 gap-10">
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-search"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Explore</h3>
                    <p class="text-xl text-stone-600 text-center">Navegue facilmente pelo catálogo interativo.</p>
                </article>
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-hand-index-thumb"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Escolha</h3>
                    <p class="text-xl text-stone-600 text-center">Selecione suas obras e faça reserva em segundos.</p>
                </article>
                <article class="flex flex-col gap-5 justify-center items-center bg-neutral-100 p-10 rounded-xl shadow-lg hover:shadow-xl hover:scale-102">
                    <span class="bg-verde-pricipal-opaco h-13 w-13 flex justify-center items-center rounded-full text-2xl text-verde-pricipal"><i class="bi bi-book-half"></i></span>
                    <h3 class="text-2xl font-petit font-extrabold text-center text-verde-pricipal">Leia</h3>
                    <p class="text-xl text-stone-600 text-center">Aproveite a leitura com uma gestão sem complicações.</p>
                </article>
            </div>
        </x-shell>
    </section>
</x-layout>
