<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Alessandro Ryo</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/ar-icon.png" type="image/x-icon">
    </head>
    <body class="antialiased font-poppins">
        <div class="">
            <section id="home">
                <div class="flex items-center justify-center p-12 text-center relative overflow-hidden bg-no-repeat bg-cover h-screen" style="background-image: url('/img/banner.jpg');">
                    <div class="flex flex-col justify-center items-center w-fit p-6 bg-white rounded-lg border border-gray-200 bg-opacity-70">
                        <div class="mb-4">
                            <img src="/img/serviam.png" alt="" class="h-28">
                        </div>
                        <div class="text-black ">
                            <h2 class="font-semibold text-4xl mb-2">SMA Santa Angela</h2>
                            <h4 class="font-normal text-lg mb-6">- Servite et Amate -</h4>
                        </div>
                        @if (Route::has('login'))
                            <div class="px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-3 text-center mr-2 mb-2">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="py-3 px-8 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-200 hover:text-black focus:z-10 focus:ring-4 focus:ring-gray-200">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </section>


        </div>
    </body>
</html>
