<section class="bg-slate-50 dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-14 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-6">
            <h1
                class="max-w-2xl mb-6 text-3xl font-extrabold md:text-4xl xl:text-5xl dark:text-white animate__animated animate__fadeInLeft">
                <span class="leading-normal tracking-tight">{{ $beranda->title }}</span>
            </h1>

            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-base lg:text-lg dark:text-gray-400 animate__animated animate__fadeInLeft animate__delay-1s">
                {{ $beranda->content }}</p>
            <a href="{{ $beranda->button_link }}"
                class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 animate__animated animate__fadeInDown animate__delay-2s">
                {{ $beranda->button_text }}
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-6 lg:flex justify-end animate__animated animate__fadeInRight animate__delay-1s">
            <img src="{{ asset('storage/' . $beranda->image) }}" alt="{{ $beranda->image }}">
        </div>
    </div>
</section>
