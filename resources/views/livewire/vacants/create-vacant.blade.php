<form class="md:w-1/2 space-y-5">
    <!-- title Address -->
    <div>
        <x-input-label for="title" :value="__('Título')" />
        <x-text-input
            id="title"
            class="block mt-1 w-full"
            type="text" name="title"
            :value="old('title')"
            placeholder="Titulo Vancates"
        />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salary" :value="__('Salario Mesual')" />
        <select
            name="salary"
            id="salary"
            class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900
            dark:text-gray-300 focus:border-indigo-500
            dark:focus:border-indigo-600 focus:ring-indigo-500
            dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >
        <option value=""></option>
        </select>
        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="category" :value="__('Categoria')" />
        <select
            name="category"
            id="category"
            class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900
            dark:text-gray-300 focus:border-indigo-500
            dark:focus:border-indigo-600 focus:ring-indigo-500
            dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >
        <option value=""></option>
        </select>
        <x-input-error :messages="$errors->get('category')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="company" :value="__('Empresa')" />
        <x-text-input
            id="company"
            class="block mt-1 w-full"
            type="text" name="company"
            :value="old('company')"
            placeholder="Empresa: ej. Neflixt, Uber, Shopify"
        />
        <x-input-error :messages="$errors->get('company')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="last_day" :value="__('Último día para postularse')" />
        <x-text-input
            id="last_day"
            class="block mt-1 w-full"
            type="date" name="last_day"
            :value="old('last_day')"
            placeholder="Empresa: ej. Neflixt, Uber, Shopify"
        />
        <x-input-error :messages="$errors->get('last_day')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="description" :value="__('Descripción del Puesto')" />
        <textarea
            name="description"
            id="description"
            class="rounded-md shadow-sm border-gray-300
            focus:border-indigo-300 focus:ring focus:ring-indigo-200
            focus:ring-opacity-50 w-full h-72"
        >

        </textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="image" :value="__('Imagen')" />
        <x-text-input
            id="image"
            class="block mt-1 w-full"
            type="file" name="image"
        />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear vacante
    </x-primary-button>
</form>
