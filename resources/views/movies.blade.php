<x-layout>
    <x-slot:heading>
       Movies Listing
    </x-slot:heading>
    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="movies/{{$movie['id']}}">
                <strong>{{$movie['title']}}</strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
