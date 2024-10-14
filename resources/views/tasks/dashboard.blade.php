<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Statistiques des Tâches') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-300">Résumé des Tâches</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    Nombre total de tâches : <span class="font-bold">{{ $totalTasks }}</span><br>
                    Tâches terminées : <span class="font-bold">{{ $completedTasks }}</span><br>
                    Tâches en cours : <span class="font-bold">{{ $pendingTasks }}</span>
                </p>
            </div>

            <!-- Section du graphique -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 mt-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-300">Graphique des Statistiques</h3>
                <canvas id="taskStatisticsChart" class="mt-4"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('taskStatisticsChart').getContext('2d');
        const taskStatisticsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Tâches', 'Tâches Terminées', 'Tâches En Cours'],
                datasets: [{
                    label: 'Statistiques des Tâches',
                    data: [{{ $totalTasks }}, {{ $completedTasks }}, {{ $pendingTasks }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Nombre de Tâches'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Statistiques'
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>

