<x-app-layout>
    <div class="max-w-lg w-full bg-white p-10 rounded-md text-center space-y-6 shadow-sm">
        @auth
            <p class="text-gray-600">Hey, {{ auth()->user()->name }}</p>
        @endauth
    </div>
</x-app-layout>