<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Sign in to your account
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 max-w">
                Or
                <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                    create an account
                </a>
            </p>
        </div>
    
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Enter your email address">
                        </div>
                    </div>
    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Enter your password">
                        </div>
                    </div>
    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>
    
                        <div class="text-sm">
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
    
                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
    
                            Sign in
                        </button>
                    </div>
                </form>
                <div class="mt-6">
    
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-gray-100 text-gray-500">
                                Or continue with
                            </span>
                        </div>
                    </div>
    
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="{{ route('login.google') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                <img class="h-6 w-6" src="https://www.svgrepo.com/show/506498/google.svg"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('login.github') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                <img class="h-5 w-5" src="data:image/png;base64,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"
                                    alt="">
                            </a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>