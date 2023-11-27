<?php

namespace App\Livewire;

use App\Models\Rol;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Computed;

class AltaUsuariosComponent extends Component
{
    public $name, $rol_id, $email, $password;
    protected $rules=[
        'name' => ['required','min:4', 'string'],
        'rol_id' => ['required'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8'],
    ];
    #[Computed]
    public function roles(){
        return Rol::all();
    }
    public function save(){

        $this->validate();
        User::create([
            'name' => $this->name,
            'rol_id' => $this->rol_id,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
    }
    public function render()
    {
        return view('livewire.alta-usuarios-component');
    }
}
