<div>
    <form action="" wire:submit="save">
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300">Nome</label>
            <div class="mt-2">
                <input type="name" name="name" id="name" wire:model="form.name"
                    class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="John Doe...">
            </div>
            @error('form.name')
                <div class="text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300">Email</label>
            <div class="mt-2">
                <input type="email" name="email" id="email" wire:model="form.email"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="you@example.com">
            </div>
            @error('form.email')
                <div class="text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label for="github" class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-300">Github</label>
            <div class="mt-2">
                <input type="github" name="github" id="github" wire:model="form.github"
                    class="block px-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="johndoe">
            </div>
            @error('form.github')
                <div class="text-red-500">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit"
            class="rounded-md bg-white/10 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white/20">
            Salvar
        </button>
    </form>
</div>
