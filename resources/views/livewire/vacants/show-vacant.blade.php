<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacants as $vacant)
            <div
                class="p-6 text-gray-900 dark:text-gray-100 md:flex
                md:justify-between md:items-center"
            >
                <div class="space-y-3">
                    <a href="#" class="text-xl font-bold">
                        {{ $vacant->title }}
                    </a>
                    <p
                        class="text-sm text-gray-600 font-bold
                        dark:text-gray-300"
                    >
                        {{ $vacant->company }}
                    </p>
                    <p>Último día: {{ $vacant->last_day->format('d/m/Y') }}</p>
                </div>

                <div
                    class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0 "
                >
                    <a
                        href="#"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white
                        text-sm font-bold uppercase dark:bg-slate-200
                        dark:text-gray-900 text-center"
                    >
                        Candidatos
                    </a>
                    <a
                        href="#"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white
                        text-sm font-bold uppercase text-center"
                    >
                        editar
                    </a>
                    <a
                        href="#"
                        class="bg-red-800 py-2 px-4 rounded-lg text-white
                        text-sm font-bold uppercase text-center"
                    >
                        eliminar
                    </a>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-gray-600 ">No hay vancates que mostrar</p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $vacants->links() }}
    </div>
</div>


