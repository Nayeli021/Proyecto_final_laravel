<?php

namespace Database\Seeders;
use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::insert([
            ['nombre' => 'Smartphone Galaxy S23', 'precio_unitario' => 899.99, 'stock' => 50, 'descripcion' => 'Smartphone de última generación con cámara avanzada y pantalla AMOLED.', 'categoria_id' => 1],
            ['nombre' => 'Sofá Seccional', 'precio_unitario' => 1499.00, 'stock' => 20, 'descripcion' => 'Sofá seccional de cuero con capacidad para 6 personas.', 'categoria_id' => 2],
            ['nombre' => 'Chaqueta de Invierno', 'precio_unitario' => 120.00, 'stock' => 75, 'descripcion' => 'Chaqueta de invierno impermeable con forro cálido.', 'categoria_id' => 3],
            ['nombre' => 'Tienda de Camping', 'precio_unitario' => 220.00, 'stock' => 30, 'descripcion' => 'Tienda de camping para 4 personas con resistente a agua y fácil montaje.', 'categoria_id' => 4],
            ['nombre' => 'Café Orgánico', 'precio_unitario' => 12.50, 'stock' => 100, 'descripcion' => 'Café orgánico de grano entero, 250g.', 'categoria_id' => 5],
        ]);
        
    }
}
