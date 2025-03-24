<x-layout title="Movies">
    <x-slot:heading>
       Movies Listing
    </x-slot:heading>
    <div class="grid grid-col-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center">
        @foreach($movies as $movie)
                <a href="movies/{{$movie['id']}}" class="w-full">
                    <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white">
                        <img class="w-full" src="{{$movie['image']}}" alt="movie">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{$movie['title'] . " ( " . $movie->year . " )"}}</div>
                        </div>
                    </div>
                </a>
        @endforeach
    </div>
    <div>
        {{$movies->links()}}
    </div>
</x-layout>
