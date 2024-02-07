<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1
                        class="text-2xl dark:text-white text-center my-10 font-bold"
                    >
                        Mis Notificaciones
                    </h1>

                    @forelse ($notifications as  $notification)
                        <div class="p-5 border border-gray-200 md:flex md:justify-between md:items-center">
                            <div>
                                <p>Tienes un nuevo candidato en:
                                    <span class="font-bold">{{ $notification->data['vacant_name'] }}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notification->created_at->diffForHumans() }}</span>
                                </p>
                            </div>
                            <div class="mt-5 md:mt-0">
                                <a href="#" class="bg-indigo-700  p-3 mt-4 text-sm uppercase font-bold rounded-lg">
                                    Ver Candidatos
                                </a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-gray-600 dark:text-white">
                            No Hay Notificaiones Nuevas
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


