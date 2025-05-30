<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TIXpress Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gradient-to-r from-orange-500 to-yellow-400 min-h-screen flex items-center justify-center">

        <div class="text-center absolute top-12">
            <h1 class="text-white text-6xl font-bold italic">TIX<span class="not-italic">press</span> <span class="text-5xl">🚌</span></h1>
        </div>

        <div class="bg-orange-100 rounded-xl p-8 w-full max-w-md shadow-lg mt-20">
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="username" class="block text-sm italic font-bold text-black-600 mb-1">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                </div>
                <div>
                    <label for="password" class="block text-sm italic font-bold text-black-600 mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400">
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-teal-900 text-white font-semibold italic px-6 py-2 rounded-md hover:bg-teal-700 transition-all duration-200">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>
