<div class="bg-gray-100 dark:bg-gray-700 p-5 flex flex-col justify-center  items-center">
    <h3 class="text-center text-2xl font-bold my-4">
        Postular Vacante
    </h3>

    @if (session()->has('message'))
        <p class="uppercase boder border-green-600 text-white
            bg-green-600 font-bold p-2 my-5 dark:text-white
            my-5 text-sm rounded-lg">
            {{ session('message') }}
        </p>
    @else
        <form wire:submit.prevent="apply" class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculo o Hoja de Vida (PDF)')" />
                <x-text-input
                    id="cv"
                    type="file"
                    accept=".pdf"
                    class="block mt-1 w-full"
                    wire:model="cv"
                />
            </div>

            @error('cv')
                <livewire:alerts.show-error-alert :message="$message"/>
            @enderror

            <x-primary-button class="mt-1">
                {{ __('Postularme') }}
            </x-primary-button>
        </form>
    @endif


</div>
