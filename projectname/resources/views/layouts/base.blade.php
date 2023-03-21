<html>
    <head>
        < <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel Part 2</title>
    </head>
    <body>
        <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex items-center justify-between">
            <span class="font-bold text-2xl">Food</span>
            <span> Welcome, @yield('username') </span>
         </nav>
        
        <section class="p-12 mx-auto max-w-6xl text-gray-800">
            @yield('content')
        </section>
    </body>
</html>
