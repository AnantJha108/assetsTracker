<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assets Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" ></script>
</head>

<body>
    <div class="bg-green-900 p-5 text-white flex place-content-between sticky top-0">
        <h2 class="font-xl">Asset Tracker</h2>

        <ul class="flex gap-2">
            <li><a href="">Home</a></li>
            @guest
                <li><a href="{{route('login') }}" class="px-3 py-2 bg-yellow-500 hover:bg-red-500 rounded">Login</a></li>
            @endguest
            @auth
                <li><a href="{{route('logout') }}" class="px-3 py-2 bg-red-700 rounded">Logout</a></li>
            @endauth

        </ul>
    </div>

    @section('content')
    @show

</body>

</html>
