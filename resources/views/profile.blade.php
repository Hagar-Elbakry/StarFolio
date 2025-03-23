<x-layout>
    <x-slot:heading>
        Profile
    </x-slot:heading>
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/3 text-center mb-8 md:mb-0">
            <img src="https://i.pravatar.cc/300" alt="Profile Picture" class="rounded-full w-48 h-48 mx-auto mb-4 border-4  transition-transform duration-300 hover:scale-105">
            <h1 class="text-2xl font-bold  dark:text-black mb-2">John Doe</h1>
        </div>
        <div class="md:w-2/3 md:pl-8">
            <h2 class="text-2xl font-semibold  dark:text-black mb-4">About Me</h2>
            <p class="text-gray-700  mb-6">
                Passionate software developer with 5 years of experience in web technologies.
                I love creating user-friendly applications and solving complex problems.
            </p>
            <h2 class="text-2xl font-semibold dark:text-black mb-4">Contact Information</h2>
            <ul class="space-y-2 text-gray-700 dark:text-gray-300">
                <li class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-800 dark:text-blue-900" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    john.doe@example.com
                </li>
            </ul>
        </div>
    </div>
</x-layout>
