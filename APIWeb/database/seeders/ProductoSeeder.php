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
        // Producto::create([
        //     'nombre' => 'Mesa de madera',
        //     'precio' => 100.00,
        //     'album' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_rW9Y5TfUq1duUy3j4mvfVF5kJYUh3_0opA&s',
        //     'categoria' => 'Muebles',
        // ]);

        Producto::create([
            'nombre' => 'Mesa de madera',
            'precio' => 100.00,
            'album' => 'https://media.blenom.com/product/mesa-iroke-800x800_r4CyUIU.jpg',
            'categoria' => 'Muebles',
        ]);
        
        Producto::create([
            'nombre' => 'Silla de jardín',
            'precio' => 50.00,
            'album' => 'https://img3.kenayhome.com/145759-medium_default/bowen-silla-de-jardin-natural.jpg',
            'categoria' => 'Muebles',
        ]);

        Producto::create([
            'nombre' => 'Cama matrimonial',
            'precio' => 200.00,
            'album' => 'https://images.homify.com/v1448467990/p/photo/image/1145111/viga.jpg',
            'categoria' => 'Muebles',
        ]);
        
        Producto::create([
            'nombre' => 'Set de bloques',
            'precio' => 20.00,
            'album' => 'https://www.kamchatkatoys.com/imagenes/porreferencia?identidad=40cad20a-601a-433a-b4fb-f564988351f5&referencia=&ancho=&alto=',
            'categoria' => 'Juguetes',
        ]);
        
        Producto::create([
            'nombre' => 'Muñeca de porcelana',
            'precio' => 30.00,
            'album' => 'https://http2.mlstatic.com/D_NQ_NP_787489-CBT54878633544_042023-O.webp',
            'categoria' => 'Juguetes',
        ]);

        Producto::create([
            'nombre' => 'Rompecabezas',
            'precio' => 15.00,
            'album' => 'https://www.laboresbella.com/cdn/shop/products/Puzzleanim600_7.jpg?v=1672222907',
            'categoria' => 'Juguetes',
        ]);
        
        Producto::create([
            'nombre' => 'Anillo de plata',
            'precio' => 50.00,
            'album' => 'https://i.etsystatic.com/36821472/r/il/95ccb2/4193988867/il_fullxfull.4193988867_hva4.jpg',
            'categoria' => 'Joyas',
        ]);

        Producto::create([
            'nombre' => 'Collar de perlas',
            'precio' => 80.00,
            'album' => 'https://tonilopezplata.com/wp-content/uploads/2020/04/collar-perla-barroca22-mini.jpg',
            'categoria' => 'Joyas',
        ]);
        
        Producto::create([
            'nombre' => 'Pulsera de oro',
            'precio' => 100.00,
            'album' => 'https://rosannadelariva.com/wp-content/uploads/2023/05/pulsera-artesanal-aire-768x768.webp',
            'categoria' => 'Joyas',
        ]);
        
        Producto::create([
            'nombre' => 'Bufanda tejida',
            'precio' => 10.00,
            'album' => 'https://i.etsystatic.com/6531717/r/il/51792d/2503861976/il_fullxfull.2503861976_dwun.jpg',
            'categoria' => 'Textiles',
        ]);

        Producto::create([
            'nombre' => 'Manta de lana',
            'precio' => 25.00,
            'album' => 'https://i.etsystatic.com/25364145/r/il/609977/2811456771/il_570xN.2811456771_f9u5.jpg',
            'categoria' => 'Textiles',
        ]);
        
        Producto::create([
            'nombre' => 'Cojín bordado',
            'precio' => 15.00,
            'album' => 'https://i.etsystatic.com/31042204/r/il/9fd9d7/4775436486/il_570xN.4775436486_lz7i.jpg',
            'categoria' => 'Textiles',
        ]);
        
        Producto::create([
            'nombre' => 'Taza de cerámica',
            'precio' => 8.00,
            'album' => 'https://m.media-amazon.com/images/I/51V5mA0HEEL._AC_UF894,1000_QL80_.jpg',
            'categoria' => 'Cerámica',
        ]);

        Producto::create([
            'nombre' => 'Plato de porcelana',
            'precio' => 12.00,
            'album' => 'https://ceramicaybarro.com/wp-content/uploads/plato-15.jpg',
            'categoria' => 'Cerámica',
        ]);
        
        Producto::create([
            'nombre' => 'Jarrón de barro',
            'precio' => 20.00,
            'album' => 'https://i.etsystatic.com/15223853/r/il/6bfdfe/4141609500/il_570xN.4141609500_fsh6.jpg',
            'categoria' => 'Cerámica',
        ]);
        
        Producto::create([
            'nombre' => 'Billetera de cuero',
            'precio' => 30.00,
            'album' => 'https://madeheart.com/media/productphoto/225/55122220/1_11_003.jpg',
            'categoria' => 'Cueros',
        ]);

        Producto::create([
            'nombre' => 'Cinturón de cuero',
            'precio' => 25.00,
            'album' => 'https://i.pinimg.com/736x/be/4c/2e/be4c2e2787641d906981b03333c3ceca.jpg',
            'categoria' => 'Cueros',
        ]);
        
        Producto::create([
            'nombre' => 'Bolso de mano',
            'precio' => 40.00,
            'album' => 'https://quercur.com/wp-content/uploads/2019/12/bolso-de-mano-de-cuero.jpg',
            'categoria' => 'Cueros',
        ]);
        
        Producto::create([
            'nombre' => 'Vaso de vidrio',
            'precio' => 5.00,
            'album' => 'https://www.animalgourmet.com/wp-content/uploads/2018/05/vasosmulticolor.jpg',
            'categoria' => 'Vidriería',
        ]);

        Producto::create([
            'nombre' => 'Espejo de cristal',
            'precio' => 40.00,
            'album' => 'https://images1.novica.net/pictures/4/p404603_2_400.jpg',
            'categoria' => 'Vidriería',
        ]);
        
        Producto::create([
            'nombre' => 'Florero de vidrio',
            'precio' => 15.00,
            'album' => 'https://image.made-in-china.com/202f0j00vhzqHTrtVKkE/Handmade-Glass-Flower-Vase-Luminous-Waves-Mouth-Decorative-Vase-Vintage-Home-Decor-Rustic-Farmhouse-Decorations-Living-Room-Dining-Room-Fireplace-Shelf.webp',
            'categoria' => 'Vidriería',
        ]);
        
        Producto::create([
            'nombre' => 'Perfume floral',
            'precio' => 45.00,
            'album' => 'https://www.somosbellas.com/wp-content/uploads/2021/01/colonia-lavanda-rosas.jpg',
            'categoria' => 'Cosméticos',
        ]);

        Producto::create([
            'nombre' => 'Crema hidratante',
            'precio' => 20.00,
            'album' => 'https://static.tuasaude.com/media/article/bc/4l/solucao-caseira-para-pele-seca-e-extra-seca_14896_l.jpg',
            'categoria' => 'Cosméticos',
        ]);
        
        Producto::create([
            'nombre' => 'Labial rojo',
            'precio' => 15.00,
            'album' => 'https://bazarbeniamir.com/wp-content/uploads/2023/08/image_984721ea-3107-4be3-a959-b181fc6b7ab2_360x.webp',
            'categoria' => 'Cosméticos',
        ]);
    }
}
