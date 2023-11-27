<div>
    <div class ="p-8 borderw-full shadow-lg rounded-lg">
        <h1 class ="text-center font-bold text-xl uppercase">Crear nuevos usuarios</h1>

        <form wire:submit="save">

            <div class="mt-8 p-4">

                <!-- Nombre y Rol Input -->
                <div class="flex">
                    <div class="w-2/3 p-4">
                        <x-label for="name" value="{{ __('Nombre') }}"/>
                        <x-input id="name" wire:model="name" type="text" placeholder="Ingresa el nombre del usuario" class="w-full"/>
                        <x-input-error for="name"/>
                    </div>

                    <div class="w-1/3 p-4 ">
                        <x-label for="rol_id" value="{{ __('Rol del usuario') }}"/>
                        <select id="rol_id" wire:model="rol_id" class ="border-matisse-700 focus:border-matisse-700 focus:ring-matisse-700 rounded-md shadow-sm w-full">
                            <option value="">--Selecciona un rol--</option>
                            @foreach ($this->roles as $rol)
                                <option value="{{$rol->id}}">{{str($rol->rol)->title()}}</option>
                            @endforeach
                        </select>
                        <x-input-error for="rol_id"/>
                    </div>
                </div>

                <!-- Email y Contraseña Input -->
                <div class="flex">
                    <div class="w-1/2 p-4 pt-2">
                        <x-label for="email" value="{{ __('Email') }}"/>
                        <x-input id="email" wire:model="email" type="text" placeholder="Ingresa el nombre del usuario" class="w-full"/>
                        <x-input-error for="email"/>
                    </div>

                    <div class="w-1/2 p-4 pt-2 ">
                        <x-label for="password" value="{{ __('Contraseña') }}"/>
                        <x-input id="password" wire:model="password" type="password" placeholder="Ingresa el nombre del usuario" class="w-full"/>
                        <x-input-error for="password"/>
                    </div>
                </div>

                <!-- Botón enviar -->
                <x-button class="mr-4 float-right">
                    {{ __('Crear usuario') }}
                </x-button>
            </div>

        </form>

    </div>
</div>
