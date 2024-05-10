<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Mesa de madera',
            'precio' => 100.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Muebles',
        ]);
        
        Producto::create([
            'nombre' => 'Silla de jardín',
            'precio' => 50.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Muebles',
        ]);

        Producto::create([
            'nombre' => 'Cama matrimonial',
            'precio' => 200.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Muebles',
        ]);
        
        Producto::create([
            'nombre' => 'Set de bloques',
            'precio' => 20.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Juguetes',
        ]);
        
        Producto::create([
            'nombre' => 'Muñeca de porcelana',
            'precio' => 30.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Juguetes',
        ]);

        Producto::create([
            'nombre' => 'Rompecabezas',
            'precio' => 15.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Juguetes',
        ]);
        
        Producto::create([
            'nombre' => 'Anillo de plata',
            'precio' => 50.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Joyas',
        ]);

        Producto::create([
            'nombre' => 'Collar de perlas',
            'precio' => 80.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Joyas',
        ]);
        
        Producto::create([
            'nombre' => 'Pulsera de oro',
            'precio' => 100.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Joyas',
        ]);
        
        Producto::create([
            'nombre' => 'Bufanda tejida',
            'precio' => 10.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Textiles',
        ]);

        Producto::create([
            'nombre' => 'Manta de lana',
            'precio' => 25.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Textiles',
        ]);
        
        Producto::create([
            'nombre' => 'Cojín bordado',
            'precio' => 15.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Textiles',
        ]);
        
        Producto::create([
            'nombre' => 'Taza de cerámica',
            'precio' => 8.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cerámica',
        ]);

        Producto::create([
            'nombre' => 'Plato de porcelana',
            'precio' => 12.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cerámica',
        ]);
        
        Producto::create([
            'nombre' => 'Jarrón de barro',
            'precio' => 20.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cerámica',
        ]);
        
        Producto::create([
            'nombre' => 'Billetera de cuero',
            'precio' => 30.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cueros',
        ]);

        Producto::create([
            'nombre' => 'Cinturón de cuero',
            'precio' => 25.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cueros',
        ]);
        
        Producto::create([
            'nombre' => 'Bolso de mano',
            'precio' => 40.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cueros',
        ]);
        
        Producto::create([
            'nombre' => 'Vaso de vidrio',
            'precio' => 5.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Vidriería',
        ]);

        Producto::create([
            'nombre' => 'Espejo de cristal',
            'precio' => 40.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Vidriería',
        ]);
        
        Producto::create([
            'nombre' => 'Florero de vidrio',
            'precio' => 15.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Vidriería',
        ]);
        
        Producto::create([
            'nombre' => 'Perfume floral',
            'precio' => 45.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cosméticos',
        ]);

        Producto::create([
            'nombre' => 'Crema hidratante',
            'precio' => 20.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cosméticos',
        ]);
        
        Producto::create([
            'nombre' => 'Labial rojo',
            'precio' => 15.00,
            'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
            'categoria' => 'Cosméticos',
        ]);
    }
}
