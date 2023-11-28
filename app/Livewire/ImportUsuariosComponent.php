<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads; //verfificar
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class ImportUsuariosComponent extends Component
{
    use WithFileUploads;
    public $usersFile;
    public  $failures;

    public function mount()
    {
        $this->failures = collect();
    }
    public function save()
    {
        $this->validate([
            'usersFile' => 'required|file|mimes:xlsx',
        ], [
            'usersFile.mimes' => 'El archivo debe ser de tipo Excel (.xlsx).',
        ]);


        $import = new UsersImport();
        $import->import($this->usersFile);
        // Excel::import(new UsersImport, $this->usersFile);
        $this->failures = $import->failures();

    }
    public function render()
    {
        // $this->users = User::all();
        return view('livewire.import-usuarios-component');
    }
}
