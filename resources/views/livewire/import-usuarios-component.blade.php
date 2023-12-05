<div class="w-full mt-8 text-black ">
    <form wire:submit="save">
        <div class="overflow-hidden ">
            <div class="mb-4 mx-auto">
                <div class="flex">
                    <div class="flex flex-col flex-1">
                        <x-input label="Subir archivo" labelClass="text-gray-500 text-lg" wire:model.live="usersFile"
                            type="file" class="block w-full text-sm text-slate-500 shadow-none outline-none file:mr-4 file:rounded-full file:border-0 file:bg-matisse-600 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-matisse-700 cursor-pointer" />
                    </div>
                    <x-button class="">Importar</x-button>
                </div>
                <x-input-error for="usersFile"/>
                {{-- @livewire('import') --}}
            </div>
            @if (collect($failures)->isNotEmpty())
                <table class="min-w-full text-left text-sm font-light">
                    <thead class="border-b bg-white font-medium">
                        <tr>
                            <th scope="col" class="px-6 py-4">Fila</th>
                            <th scope="col" class="px-6 py-4">Campo</th>
                            <th scope="col" class="px-6 py-4">Error</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($failures as $failure)
                            <tr class="border-b bg-neutral-100">
                                <td td class="whitespace-nowrap px-6 py-4">{{ $failure->row }}</td>
                                <td td class="whitespace-nowrap px-6 py-4">
                                    {{ str($failure->attribute)->ucfirst() }}</td>
                                <td td class="whitespace-nowrap px-6 py-4">{{ $failure->errors[0] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </form>
</div>
