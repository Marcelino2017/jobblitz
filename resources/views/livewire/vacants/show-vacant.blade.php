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
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->category_id }}</span>
            </p>

            <p class="font-bold text-sm uppercase my-3 dark:text-gray-100">
                Salario:
                <span class="normal-case font-normal dark:text-gray-100">{{ $vacant->salary_id }}</span>
            </p>
        </div>
    </div>
</div>
