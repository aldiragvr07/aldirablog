<x-layout :title="$title">
    <section class="bg-[#0f172a] text-white min-h-screen flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-2xl">
            <h2 class="mb-8 text-4xl font-extrabold text-center">Hubungi Kami</h2>

            <form action="#" class="space-y-6">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium">Email Anda</label>
                    <input type="email" id="email" class="w-full p-3 rounded-lg bg-gray-800 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="name@example.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium">Subjek</label>
                    <input type="text" id="subject" class="w-full p-3 rounded-lg bg-gray-800 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Tulis subjek pesan Anda" required>
                </div>
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium">Pesan Anda</label>
                    <textarea id="message" rows="6" class="w-full p-3 rounded-lg bg-gray-800 text-white border border-gray-600 focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Tulis pesan di sini..." required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="inline-block bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg font-medium transition">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
