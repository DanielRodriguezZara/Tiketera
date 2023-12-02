<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToModel, WithStartRow, WithHeadingRow, WithUpserts, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new User([
           'name' => $row[0],
           'rol_id' => $row[1],
           'email' => $row[2],
           'password' => Hash::make($row[3]),
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
            '1' => 'required', // Perfil
            '2' => 'required|email', // Email
            '3' => 'required|string|min:8', // Contraseña
        ];
    }
    /**
     * @return array
     */
    public function customValidationAttributes()
    {
        return [
            '0' => 'nombre',
            '1' => 'rol_id',
            '2' => 'email',
            '3' => 'password',

        ];
    }
}
