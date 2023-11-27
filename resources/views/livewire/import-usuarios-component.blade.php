x-slot name="header">Importar usuarios</x-slot>
<div class="w-full text-black ">
    <form wire:submit.prevent="save">
        <div class="overflow-hidden">
            <div class="mb-4 w-3/4 mx-auto">
                <div class="flex">
                    <div class="flex flex-col flex-1">
                        <x-input label="Subir archivo" labelClass="text-gray-500 text-lg" wire:model="usersFile"
                            type="file" class="input-file flex-1" />

                    <x-button class="h-10">Importar</x-button>
                </div>
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
                                <td td class="whitespace-nowrap px-6 py-4">{{ $failure->row() }}</td>
                                <td td class="whitespace-nowrap px-6 py-4">
                                    {{ str($failure->attribute())->ucfirst() }}</td>
                                <td td class="whitespace-nowrap px-6 py-4">{{ $failure->errors()[0] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </form>
</div>
