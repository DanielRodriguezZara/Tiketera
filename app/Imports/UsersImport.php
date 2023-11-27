<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
           'name'     => $row[0],
           'email'    => $row[1],
           'password' => Hash::make($row[2]),
        ]);

    }
    public function startRow(): int
    {
        return 2;
    }
    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'email';
    }
    public function rules(): array
    {
        return [
            '0' => 'required', // Nombre
            '1' => 'required|in:Agente,Asesor,Administrador', // Perfil
            '2' => 'required|email', // Email
            '3' => 'required|string|min:8', // Contraseña
            '4' => 'nullable|in:activo,inactivo,Activo,Inactivo', // Estado

        ];
    }
    /**
     * @return array
     */
    public function customValidationAttributes()
    {
        return [
            '0' => 'nombre',
            '1' => 'perfil',
            '2' => 'email',
            '3' => 'contraseña',
            '4' => 'estado (Activo, Inactivo)',

        ];
    }
}
