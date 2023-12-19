<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Beneficio;
use App\Models\Solicitud;

class SolicitudForm extends Component
{
    public User $user;
    public $fechaInicio;
    public $fechaFinal;
    public $horaInicio;
    public $horaFinal;
    public $descripcion;
    public $beneficio;

    protected $rules = [
        'fechaInicio' => 'required',
        'fechaFinal' => 'required',
        'horaInicio' => 'required',
        'horaFinal' => 'required',
        'descripcion' => 'required',
        'beneficio' => 'required'
    ];
    public function render(User $user)
    {
        $beneficios = Beneficio::all();
        return view('livewire.solicitud-form', ['user' => $user, 'beneficios' => $beneficios] );
    }
    public function saveSolicitud(){
        $datos = $this->validate();

        Solicitud::create([
            'fechaInicio' => $datos['fechaInicio'],
            'fechaFinal' => $datos['fechaFinal'],
            'horaInicio' => $datos['horaInicio'],
            'horaFinal' => $datos['horaFinal'],
            'descripcion' => $datos['descripcion'],
            'beneficio' => $datos['beneficio_id'],
            'user_id' => auth()->user()->id,
        ]);
    }
}
