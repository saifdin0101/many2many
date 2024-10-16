<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="h-[100px] bg-[#2ebcf4] flex justify-center items-center gap-[300px]">
        <div class="font-semibold text-4xl">Saif</div>
        <div class="flex justify-center items-center gap-10">
            <a href="/">Home</a>
            <a href="">Events</a>
            <a href="/home/clients">Clients</a>
            <a href="/home/eventdirectors">Event Directors</a>
        </div>


    </nav>
    @yield('content')
    
</body>
</html>