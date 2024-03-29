<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Vacantes</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="readFormData">
            <div class="grid grid-cols-3 gap-5 md:flex md:justify-between md:items-center ">
                <div class="mb-5 w-full p-5">
                    <label
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="termino">Término de Búsqueda
                    </label>
                    <input
                        id="term"
                        type="text"
                        placeholder="Buscar por Término: ej. Laravel"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="term"
                    />
                </div>

                <div class="mb-5 w-full p-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Categoría</label>
                    <select  wire:model="category" class="border-gray-300 p-2 w-full">
                        <option>--Seleccione--</option>

                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5 w-full p-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Salario Mensual</label>
                    <select  wire:model="salary" class="border-gray-300 p-2 w-full">
                        <option>-- Seleccione --</option>
                        @foreach ($salaries as $salary)
                            <option value="{{ $salary->id }}">{{$salary->salary}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input
                    type="submit"
                    class="bg-indigo-700 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase md:w-full w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>
