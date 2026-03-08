<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Counter</h1>
        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8 flex flex-col items-center justify-center">
            <h2 class="text-6xl p-10 text-center">{{ $counter }}</h2>

            <div class="flex gap-3">
                <button wire:click="decrement" type="button" class="rounded-lg bg-gray-200 px-5 py-2.5 text-sm font-medium text-gray-800 transition hover:bg-gray-300">
                    Decrement
                </button>
                <button wire:click="increment" type="button" class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-800">
                    Increment
                </button>
            </div>
        </div>
    </div>
</div>
