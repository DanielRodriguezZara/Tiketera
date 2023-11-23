<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class SolicitudesComponent extends Component
{
    #[Title('Solicitudes')]
    public function render()
    {
        return view('livewire.solicitudes-component');
    }
}
