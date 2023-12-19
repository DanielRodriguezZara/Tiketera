<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Beneficio;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        $beneficios = Beneficio::all();
        return view('livewire.home.dashboard', ['beneficios' => $beneficios]);
    }
}
