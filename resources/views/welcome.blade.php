<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Workshop Planner</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welkom bij de Workshopplanner!</h1>
        <p class="text-lg text-gray-600 mb-6">
            Start je reis en schrijf je in voor interessante workshops en activiteiten.
        </p>
        <a href="/login" class="inline-block px-6 py-3 text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition mb-8">
            Log in om te beginnen
        </a>

        <!-- Voorbeeld lijst van workshops -->
        <div class="mt-10">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Aanbevolen Workshops</h2>
            <div class="space-y-4 max-w-md mx-auto">

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Introductie tot Webontwikkeling</h3>
                    <p class="text-gray-600 mt-2">Een basisworkshop over HTML, CSS en JavaScript.</p>
                    <span class="text-gray-500 text-sm">Datum: 15 november 2024</span>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Tailwind CSS voor Beginners</h3>
                    <p class="text-gray-600 mt-2">Leer hoe je snel moderne UI’s bouwt met Tailwind CSS.</p>
                    <span class="text-gray-500 text-sm">Datum: 20 november 2024</span>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Inleiding tot Laravel</h3>
                    <p class="text-gray-600 mt-2">Ontdek de kracht van het Laravel framework.</p>
                    <span class="text-gray-500 text-sm">Datum: 25 november 2024</span>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
