<nav class="bg-transparent border-gray-200 px-2 sm:px-4 py-5 z-50">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
            <h1 class="font-bold text-2xl">Kontol</h1>
            <img src="{{ asset('img/logo.png') }}" alt="" class="w-10 h-10">
        </div>

        <div class="flex items-center gap-2 text-bold text-white">
            <a href="">About</a>
            <a href="">Service</a>
        </div>

        <div class="flex items-center gap-2 font-bold">
            <a href="{{ route('dashboard') }}"
                class="block py-2 px-4 rounded-md text-white hover:bg-violet-600">Dashboard</a>
            <a href="" class="block py-2 px-4 rounded-md text-white hover:bg-violet-600">TOPSIS</a>
        </div>
    </div>
</nav>
