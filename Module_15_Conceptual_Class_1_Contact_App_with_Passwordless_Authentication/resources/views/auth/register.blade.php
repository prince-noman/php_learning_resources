<x-app-layout>
    <form class="max-w-lg w-full bg-white p-10 rounded-md text-center space-y-6 shadow-sm" method="post" action="">
        <h1 class="font-semibold text-2xl text-gray-600">Register</h1>

        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="py-2 px-4 bg-slate-50 border-2 border-slate-200 rounded-md w-full" placeholder="Enter your mail" required autofocus>
        @error('email')
            <div class="mt-2">{{ $message }}</div>
        @enderror

        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name" class="py-2 px-4 bg-slate-50 border-2 border-slate-200 rounded-md w-full" placeholder="John" required>
        @error('name')
            <div class="mt-2">{{ $message }}</div>
        @enderror

        <button type="submit" class="bg-slate-600 text-white px-6 h-11 rounded-md font-medium w-full">Register</button>

        @if (session('success'))
            <p class="text-gray-600">{{ session('success') }}</p>
        @endif

        @csrf
    </form>
</x-app-layout>