<x-layout>
    <x-slot:heading>
        Edit Movie : {{$movie->title}}
    </x-slot:heading>
    <form method="post" action="/movies/{{$movie->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="title"
                                       id="title"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{$movie->title}}"
                                       required>
                            </div>
                            <x-form-error name="title"/>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="image" class="block text-sm/6 font-medium text-gray-900">Image</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="image"
                                       id="image"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{$movie->image}}"
                                       required>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Enter URL for POSTER</p>
                            <x-form-error name="image"/>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description"
                                      id="description"
                                      rows="3"
                                      class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                      required>{{$movie->description}}</textarea>
                        </div>
                        <x-form-error name="description"/>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="genre" class="block text-sm/6 font-medium text-gray-900">Genre</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="genre"
                                       id="genre"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{$movie->genre}}"
                                       required>
                            </div>
                            <x-form-error name="genre"/>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="year" class="block text-sm/6 font-medium text-gray-900">Year</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text"
                                       name="year"
                                       id="year"
                                       class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                       value="{{$movie->year}}"
                                       required>
                            </div>
                            <x-form-error name="year"/>
                        </div>
                    </div>

                </div>
                <div class="mt-6 flex items-center justify-between gap-x-6">
                    <div class="flex items-center">
                        <button type="submit" form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
                    </div>
                    <div class="flex items-center gap-x-6">
                    <a href="/movies/{{$movie->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
        </div>
        </div>
    </form>
    <form method="post" action="/movies/{{$movie->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
