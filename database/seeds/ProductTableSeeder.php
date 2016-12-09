<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = array(
			[
				'name' 			=> 'Vestido con Pedrería Dorada y Encaje Negro',
				'slug' 			=> 'vestido-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_26-Negro_-_templ1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_26-Negro_-_templ2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Estampado Floral Y Jareta Azul Marino',
				'slug' 			=> 'vestido-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 255.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_33-Marino_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_33-Marino_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Parte Inferior a Dos Tonos y Cinturón',
				'slug' 			=> 'vestido-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 300.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_24-Negro_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_24-Negro_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Cierre Metálico en Escote Negro',
				'slug' 			=> 'vestido-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 475.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_51-Negro_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_51-Negro_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> ' Vestido con Estampado Floral Y Jareta Negro',
				'slug' 			=> 'vestido-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 280.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_32-Negro_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_32-Negro_-_ab2.jpg',

				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Texturizado Diagonal  Negro',
				'slug' 			=> 'vestido-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_52-Negro_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_52-Negro_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Escote Tipo Escarolas Blanco con Negro',
				'slug' 			=> 'vestido-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_74-Blanco_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_74-Blanco_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Vestido con Escote Tipo Escarolas Rojo con Negro',
				'slug' 			=> 'vestido-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_75-Rojo_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/159891_-_images_-_products_-_75-Rojo_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			/*   TOP - - - - - - - -*/
			[
				'name' 			=> 'Camisa con Puntos En Contraste Rojo',
				'slug' 			=> 'TOP-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_702-ROJO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_702-ROJO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Aletilla Interior Con Estampado Cyan',
				'slug' 			=> 'TOP-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD108-CIELO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD108-CIELO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Estampado De Tejido Azul Marino',
				'slug' 			=> 'TOP-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD115-MARINO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD115-MARINO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Motivo Floral Blanco Y Azul',
				'slug' 			=> 'TOP-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD116-AZUL_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD116-AZUL_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Motivo Punteado Blanco Y Azul',
				'slug' 			=> 'TOP-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD118-AZUL_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD118-AZUL_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Motivo Punteado Blanco Y Rojo',
				'slug' 			=> 'TOP-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD119-ROJO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD119-ROJO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Motivo De Flores Negro Y Blanco',
				'slug' 			=> 'TOP-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD131-NEGRO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD131-NEGRO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Camisa con Motivo De Cruces Azul Francia',
				'slug' 			=> 'TOP-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD143-FRANCIA_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_LD143-FRANCIA_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			]
			/*BOLSAS - - - - - - - - - - - - */
			,[
				'name' 			=> ' Bolsa De Mano Capitonada morado',
				'slug' 			=> 'bag-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/161951_-_images_-_products_-_WHB97-AZUL-MORADO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/161951_-_images_-_products_-_WHB97-AZUL-MORADO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			]
			,[
				'name' 			=> 'Bolsa Cruzada con Placa Colgante',
				'slug' 			=> 'bag-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1361DC-26_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1361DC-26_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> ' Bolsa Cruzada con Acabado Texturizado en Relieve Azul ',
				'slug' 			=> 'bag-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1382DC-26_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1382DC-26_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> ' Bolsa Cruzada con Acabado Texturizado en Relieve ',
				'slug' 			=> 'bag-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1382DC-16_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/155561_-_images_-_products_-_NF1382DC-16_-_ab1.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> 'BOLSO CABÁS L.12.12 CONCEPT MEDIANO',
				'slug' 			=> 'bag-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dwf49ed879/NF0946PO_016_24.jpg?sw=1280&sh=1280&sm=fit',				
				'image2' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dwbcc1deb0/NF0946PO_016_33.jpg?sw=1280&sh=1280&sm=fit',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> ' ONCEPT FANTAISIE STRIPED ZIPPERED',
				'slug' 			=> 'bag-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dw341c082c/NF1549CF_833_24.jpg?sw=1280&sh=1280&sm=fit',				
				'image2' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dwbbd9a695/NF1549CF_833_33.jpg?sw=1280&sh=1280&sm=fit',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> 'CONCEPT FANTAISIE GINGHAM ZIPPERED',
				'slug' 			=> 'bag-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dw63599a18/NF1553CF_840_24.jpg?sw=1280&sh=1280&sm=fit',				
				'image2' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dweae8feed/NF1553CF_840_33.jpg?sw=1280&sh=1280&sm=fit',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],[
				'name' 			=> ' CONCEPT CROC ZIPPERED TOTE BAG',
				'slug' 			=> 'bag-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dw4e6484a9/NF1556CX_815_24.jpg?sw=1280&sh=1280&sm=fit',				
				'image2' 		=> 'http://image1.lacoste.com/sits_pod14/dw/image/v2/AAQM_PRD/on/demandware.static/Sites-INT-Site/Sites-master/es/dw63bb0ff4/NF1556CX_815_33.jpg?sw=1280&sh=1280&sm=fit',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			]

			/*CAmisas de hombres*/
			,[
				'name' 			=> 'Camisa con motivos lineales y de flores a tono
Blanco ',
				'slug' 			=> 'camisa-1',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML478-unico_-_ab1.jpg',
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML478-unico_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> ' Camisa con Cuadro Gingham En Contraste
Azul ',
				'slug' 			=> 'camisa-2',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_L2063-ROJO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_L2063-ROJO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> ' Camisa con Rayas Rojas
Blanco
Pierre Cardin',
				'slug' 			=> 'camisa-3',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/157931_-_images_-_products_-_51X290-VIN_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/157931_-_images_-_products_-_51X290-VIN_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> ' Camisa con Rayas Azul Marino
Blanco
Pierre ',
				'slug' 			=> 'camisa-4',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/157931_-_images_-_products_-_51X290-AZU_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/157931_-_images_-_products_-_51X290-AZU_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> ' Camisa con Cuadros Chicos
Negro',
				'slug' 			=> 'camisa-5',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_L2064-MARINO_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/150791_-_images_-_products_-_L2064-MARINO_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> 'Camisa con Estampado de Números Negros y Rojos ',
				'slug' 			=> 'camisa-6',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML381-unico_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML381-unico_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],[
				'name' 			=> ' Camisa con Estampado Cuadriculado
Blanca',
				'slug' 			=> 'camisa-7',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML241-unico_-_ab1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/157021_-_images_-_products_-_CML241-unico_-_ab2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			]
			,[
				'name' 			=> 'Camisa con Rayas en Gris y Vino Blanco ',
				'slug' 			=> 'camisa-8',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 275.00,
				'image' 		=> 'https://mex.privalia.com/front/get/photo/148311_-_images_-_products_-_62CHECHE0186-RGF1_-_templ1.jpg',				
				'image2' 		=> 'https://mex.privalia.com/front/get/photo/148311_-_images_-_products_-_62CHECHE0186-RGF1_-_templ2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			]


		);

		Product::insert($data);
    }
}
