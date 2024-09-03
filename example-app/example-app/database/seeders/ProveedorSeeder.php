<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proveedor::insert([
            ['nombre' => 'TechWorld', 'contacto' => 'contacto@techworld.com', 'categoria_id' => 1],
            ['nombre' => 'HogarPlus', 'contacto' => 'info@hogarplus.com', 'categoria_id' => 2],
            ['nombre' => 'SportyGear', 'contacto' => 'support@sportygear.com', 'categoria_id' => 3],
            ['nombre' => 'FashionTrend', 'contacto' => 'hello@fashiontrend.com', 'categoria_id' => 4],
            ['nombre' => 'Foodies', 'contacto' => 'contact@foodies.com', 'categoria_id' => 5],
        ]);
    }
}
