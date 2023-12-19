<div>
    <h1 class="text-center text-2xl font-bold">Hola <span class="uppercase">{{$user->name}}</span> cuentanos sobre tu petición.</h1>
    <form class ="w-full space-y-5" wire:submit.prevent='saveSolicitud'>
        <div class="flex w-full gap-5 justify-between">
            <div class="w-1/2">
                <x-label for="fechaInicio" :value="__('Fecha inicio')" class="py-2"/>
                <x-input id="fechaInicio" type="date" wire:model="fechaInicio" :value="old('fechaInicio')" class="w-full mb-3" placeholder="Titulo de la vacante"/>
                <x-input-error for="fechaInicio"/>

                <x-label for="horaInicio" :value="__('Empieza ')" class="py-2"/>
                <x-input id="horaInicio" type="time" wire:model="horaInicio" :value="old('horaInicio')" class="w-full" placeholder="Titulo de la vacante"/>
                <x-input-error for="fechaInicio"/>
            </div>
            <div class="w-1/2">
                <x-label for="fechaFinal" :value="__('Fecha final ')" class="py-2"/>
                <x-input id="fechaFinal" type="date" wire:model="fechaFinal" :value="old('fechaFinal')" class="w-full mb-3" placeholder="Titulo de la vacante"/>
                <x-input-error for="fechaInicio"/>

                <x-label for="horaFinal" :value="__('Termina')" class="py-2"/>
                <x-input id="horaFinal" type="time" wire:model="horaFinal" :value="old('horaFinal')" class="w-full" placeholder="Titulo de la vacante"/>
                <x-input-error for="fechaInicio"/>
            </div>
        </div>
        <div class="flex justify-between gap-5">
            <div class=" w-3/4">
                <x-label for="descripcion" :value="__('Descripcion')" class="py-2"/>
                <textarea wire:model='descripcion' class="w-full border border-matisse-700 rounded-lg"></textarea>
                <x-input-error for="fechaInicio"/>
            </div>
            <div class=" w-1/4">
                <x-label for="beneficio" :value="__('Tipo')" class="py-2"/>
                <select id="beneficio" wire:model="beneficio"  class="border border-matisse-700 focus:border-matisse-700 focus:ring-matisse-700 rounded-md shadow-sm w-full">
                    <option value="">--Seleccione el beneficio--</option>
                    @foreach ($beneficios as $beneficio )
                        <option value="{{$beneficio->id}}">{{$beneficio->beneficio}}</option>
                    @endforeach
                </select>
                <x-input-error for="fechaInicio"/>
            </div>
        </div>
        <div class="flex justify-center">
            <x-button class="w-40">
                {{__('Enviar petición')}}
            </x-button>
        </div>

    </form>
</div>
