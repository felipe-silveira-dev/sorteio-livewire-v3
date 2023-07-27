<div class="space-y-6">
    <div class="p-10 text-3xl font-bold text-center text-green-800 bg-green-200 border-2 border-green-600 rounded-xl">
        {{ $winner?->name     }}
    </div>

    <button wire:click="run" class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20">
        Sortear
    </button>
</div>
