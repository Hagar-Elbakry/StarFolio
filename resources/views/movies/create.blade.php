<x-layout>
    <x-slot:heading>
       Add Movie
    </x-slot:heading>
    <form method="post" action="/movies">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" required/>
                           <x-form-error name="title"/>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="image">Image</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="image" id="image" required/>
                            <p class="mt-3 text-sm/6 text-gray-600">Enter URL for POSTER</p>
                            <x-form-error name="image"/>
                        </div>
                    </x-form-field>

                    <div class="col-span-full">
                        <x-form-label for="description">Description</x-form-label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required></textarea>
                        </div>
                        <x-form-error name="description"/>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="genre">Genre</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="genre" id="genre" required/>
                        </div>
                        <x-form-error name="genre"/>
                    </div>

                    <div class="col-span-full">
                        <x-form-label for="year">Year</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="year" id="year" required/>
                        </div>
                        <x-form-error name="year"/>
                    </div>

            </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/movies" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
            </div>
        </div>
    </form>

</x-layout>
