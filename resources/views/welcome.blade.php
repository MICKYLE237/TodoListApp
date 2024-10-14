<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil - Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?workspace,productivity');
            background-size: cover;
            background-position: center;
            height: 300px;
            text-align: center;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.6);
            text-align: center;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900" style="text-align: center">Bienvenue dans votre Gestionnaire de Tâches</h1>
            <div>
                <a href="{{ route('login') }}" class="text-red-600 hover:text-red-800 font-semibold mr-4">Se connecter</a>
                <a href="{{ route('register') }}" class="text-red-600 hover:text-red-800 font-semibold">S'inscrire</a>
            </div>
        </div>
    </header>

    <main>
        <div class="hero">
            <div class="hero-overlay flex items-center justify-center h-full">
                <h2 class="text-white text-4xl font-semibold">Organisez votre vie, une tâche à la fois</h2>
            </div>
        </div>

        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
                <div class="bg-white overflow-hidden shadow sm:rounded-lg mt-6">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-900">Fonctionnalités Clés</h2>
                        <p class="mt-4 text-gray-600">
                            Notre application de gestion de tâches vous aide à suivre vos tâches quotidiennes, à planifier votre travail et à rester productif.
                        </p>
                        <div class="mt-6 flex gap-4">
                            <a href="/tasks/create"
                               class="inline-block px-6 py-3 text-white bg-red-600 hover:bg-red-700 rounded-md shadow-md transition duration-300">
                                Ajouter une Tâche
                            </a>
                            <a href="/tasks"
                               class="inline-block px-6 py-3 text-red-600 border border-red-600 hover:bg-red-600 hover:text-white rounded-md shadow-md transition duration-300">
                                Voir mes Tâches
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Statistiques des Tâches</h3>
                        <p class="text-gray-600 mt-2">Nombre total de tâches : <span class="font-bold">12</span></p>
                        <p class="text-gray-600">Tâches terminées : <span class="font-bold">8</span></p>
                        <p class="text-gray-600">Tâches en cours : <span class="font-bold">4</span></p>
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900">À Propos de Nous</h3>
                        <p class="text-gray-600 mt-2">
                            Notre mission est de vous aider à mieux gérer votre temps et vos tâches grâce à une interface intuitive et des fonctionnalités avancées.
                        </p>
                    </div>

                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Témoignages</h3>
                        <p class="text-gray-600 mt-2">
                            "Cette application a transformé ma façon de travailler! Je suis maintenant plus organisé et productif." - <strong>Utilisateur Satisfait</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white shadow mt-10">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-600">&copy; 2024 Micky NGUELIEUGA. Tous droits réservés.</p>
        </div>
    </footer>
</body>

</html>

