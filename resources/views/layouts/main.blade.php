<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Demo</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans bg-gray-100 text-black">
    {{-- <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="hover-text-gray-300">Home</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover-text-gray-300">About</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover-text-gray-300">Contact</a>
                </li>
            </ul>
        </div>
    </nav> --}}

    <nav class="flex items-center justify-between flex-wrap border-black">
  <div class="flex items-center flex-shrink-0 text-black mr-6 px-4 py-6">
    <img src="/img/Logo-512.png" class="fill-current h-8 w-8 mr-2 h-18 w-18">
    {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
    {{-- <span class="font-semibold text-xl tracking-tight">Tailw Demo</span> --}}
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4">
        Home
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white mr-4">
        About
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-white">
        Contact
      </a>
    </div>
    <div>
      <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-black border-blue hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
</nav>

    @yield('content')
</body>
</html>