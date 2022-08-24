<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>utxo.one ~ bitcoin | privacy | sovereignty</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="container mx-auto h-screen justify-center items-center">
        <div class="align-middle">
            <h1 class="text-5xl md:text-7xl lg:text-9xl text-orange-500 font-semibold text-center font-mono pt-5">
                utxo.one</h1>
            <p class="text-sm md:text-lg lg:text-xl text-gray-100 text-center font-mono mb-10">Bitcoin / Privacy /
                Sovereignty </p>

            <div class="bg-gray-900 px-4 lg:px-10">
                <h2 class="text-3xl lg:text-5xl font-mono text-gray-400 text-center pt-8">Assessement: Clown World
                    Privacy</h2>
                <p class="text-sm text-center text-gray-500 font-mono pb-8 pt-1">An 11 year old kid with a google search
                    could learn everything about you.</p>
                {{-- <div class="text-center">
                    <button class="text-md text-center text-white bg-orange-500 px-4 py-2">Score:
                        {{ $reportData['totalScore'] }} / 40</button>
                </div> --}}

<div>
    <h3 class="text-xl text-orange-500 font-mono pb-3">Email Privacy: {{ $reportData['emailRating'] }}</h3>
    <p class="text-md text-gray-300 font-sans pb-7">
        {{ $reportData['emailMessage'] }}
    </p>
</div>

<div>
    <h3 class="text-xl text-orange-500 font-mono pb-3">Browsing Privacy: {{ $reportData['vpnRating'] }}</h3>
    <p class="text-md text-gray-300 font-sans pb-3">
        {{ $reportData['vpnMessage'] }}
    </p>
</div>

            </div>
        </div>
    </div>
</body>

</html>
