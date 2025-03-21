<x-layout>
    <x-slot:heading>
        Movie
    </x-slot:heading>
    <p>
    <div class="flex flex-col justify-center items-center max-h-calc(100vh-100px) py-5">
    <div class="max-w-2xl w-full bg-white rounded-lg overflow-hidden shadow-2xl p-8">
        <div class="px-8 py-6">
            <div class="font-bold text-2xl mb-4 text-center">{{$movie->title}}</div>
            <p class="text-gray-700 text-lg leading-relaxed">
                {{$movie->description}}
            </p>
        </div>

        <div class="px-6 pt-4 pb-2">
            @foreach($movie->users as $user)
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$user->name}}</span>
            @endforeach
        </div>
    </div>
        <div class="mt-4 w-full flex justify-center">
            @can('edit', $movie)
                <p>
                    <x-button href="/movies/{{$movie->id}}/edit">Edit Movie</x-button>
                </p>
            @endcan
        </div>
    </div>
</x-layout>
