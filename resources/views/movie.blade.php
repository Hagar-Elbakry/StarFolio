<x-layout>
    <x-slot:heading>
        Movie
    </x-slot:heading>
    <p>
    <div class="flex justify-center items-center min-h-calc(100vh-100px) py-10">
    <div class="max-w-2xl w-full bg-white rounded-lg overflow-hidden shadow-2xl p-8">
        <div class="px-8 py-6">
            <div class="font-bold text-2xl mb-4 text-center">{{$movie['title']}}</div>
            <p class="text-gray-700 text-lg leading-relaxed">
                {{$movie['description']}}
            </p>
        </div>
    </div>
    </div>
</x-layout>
