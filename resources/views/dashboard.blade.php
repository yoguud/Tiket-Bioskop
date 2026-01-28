<x-app-layout>
    <div class="py-12 bg-gray-900 min-h-screen text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Looping Genre --}}
            @foreach ($moviesByGenre as $genre => $films)
                <div class="mb-8">
                    {{-- Judul Genre --}}
                    <h2 class="text-2xl font-bold mb-4 px-4 border-l-4 border-red-600 ml-4">
                        {{ $genre }}
                    </h2>

                    {{-- Container Scroll Horizontal --}}
                    <div class="flex overflow-x-auto space-x-4 pb-4 px-4 scrollbar-hide">
                        
                        {{-- Looping Film per Genre --}}
                        @foreach ($films as $film)
                            <div class="flex-none w-40 md:w-48 group relative">
                                {{-- Poster Film --}}
                                <a href="#" class="block transition transform hover:scale-105 duration-300">
                                    <div class="aspect-[2/3] overflow-hidden rounded-lg shadow-lg bg-gray-800">
                                        <img src="{{ $film->poster }}" 
                                             alt="{{ $film->title }}" 
                                             class="w-full h-full object-cover group-hover:opacity-80 transition">
                                    </div>
                                    
                                    {{-- Judul & Durasi (Minimalis) --}}
                                    <div class="mt-2">
                                        <h3 class="text-sm font-semibold truncate">{{ $film->title }}</h3>
                                        <p class="text-xs text-gray-400">{{ $film->duration }} min</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>