<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($vacants as $vacant)
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <div class="leading-10">
                <a href="#" class="text-xl font-bold">
                    {{ $vacant->title }}
                </a>
            </div>
        </div>
    @endforeach
</div>
