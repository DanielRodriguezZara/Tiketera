<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeneficiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beneficios')->insert([
            'beneficio' => 'Disfrute su cumpleaños',
        ]);
        DB::table('beneficios')->insert([
            'beneficio' => 'Disfrute de tiempo familiar',
        ]);
        DB::table('beneficios')->insert([
            'beneficio' => 'Diligencia de padres',
        ]);
        DB::table('beneficios')->insert([
            'beneficio' => 'Grados propios o familiares',
        ]);
        DB::table('beneficios')->insert([
            'beneficio' => 'Citas médicas',
        ]);
        DB::table('beneficios')->insert([
            'beneficio' => 'Otras activdades',
        ]);

    }
}
