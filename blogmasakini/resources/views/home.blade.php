<x-layout :title="$title">
    <div class="bg-[#0f172a] text-white min-h-screen flex items-center">
        <div class="max-w-5xl mx-auto text-center px-6 py-20 md:py-28 space-y-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                Blogmasakini, segalanya boleh dibahas
            </h1>
            <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
                Cerita sehari-hari, ide tiba-tiba, tips hidup, opini nyeleneh,<br />
                atau hal random yang menurutmu keren — 
                <span class="text-green-400 font-semibold">tulis aja!</span>
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <a href="#about" class="px-6 py-3 rounded-lg bg-blue-600 hover:bg-blue-700 font-medium transition">
                    Tentang Kami
                </a>
                <a href="#blog" class="px-6 py-3 rounded-lg border border-white hover:bg-white hover:text-black font-medium transition">
                    Mulai Baca Blog
                </a>
            </div>
        </div>
    </div>
</x-layout>
