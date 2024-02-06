<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3 dark:text-gray-100">
            {{ $vacant->title }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 dark:bg-gray-700 p-4 my-10">
            <p class="font-bold text-sm uppercase my-3 dark:text-gray-100">
                Empresa:
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->company }}</span>
            </p>

            <p class="font-bold text-sm uppercase my-3 dark:text-gray-100">
                Último día para postularse:
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->last_day->toFormattedDateString() }}</span>
            </p>

            <p class="font-bold text-sm uppercase my-3 dark:text-gray-100">
                Categoria:
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->category->category }}</span>
            </p>

            <p class="font-bold text-sm uppercase my-3 dark:text-gray-100">
                Salario:
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->salary->salary }}</span>
            </p>
        </div>
        <div class="md:grid md:grid-cols-6 gap-4">
            <div class="md:col-span-2">
                <img width="500" src="{{ asset('storage/vacants/' . $vacant->image ) }}" alt="{{ 'imagen vacate ' . $vacant->title }}">
            </div>

            <div class="md:col-span-4">
                <h2 class="text-2xl font-bold mb-5 dark:text-zinc-100"> Drescripción del Puesto</h2>
                <p class="dark:text-zinc-100">{{ $vacant->description }}</p>
            </div>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 boder border-dashed p-5 text-center dark:bg-gray-700">
            <p class="dark:text-white">
                ¿Deseas aplicar esta vacante?
                <a
                    class="font-bold text-indigo-600"
                    href="{{ route('register') }}"
                >
                    Obten una cuenta y aplica a esta y otras vacantes
                </a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacant::class)
        <livewire:vacants.apply-vacant :vacant="$vacant">
    @endcan

</div>
