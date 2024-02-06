<div class="bg-gray-100 dark:bg-gray-700 p-5 mt-flex flex-col justify-center  items-center">
    <h3 class="text-center text-2xl font-bold my-4">
        Postular Vacante
    </h3>

    <form class="w-96 mt-5">
        <div class="mb-4">
            <x-input-label for="cv" :value="__('Curriculo o Hoja de Vida (PDF)')" />
            <x-text-input
                id="cv"
                type="file"
                accept=".pdf"
                class="block mt-1 w-full"
            />
        </div>
    </form>
</div>
