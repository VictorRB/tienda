<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
				'name' => 'Vestidos', 
				'slug' => 'vestidos', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Top', 
				'slug' => 'top', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#445500'
			],
			[
				'name' => 'Bolsas', 
				'slug' => 'bolsa', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Camisas', 
				'slug' => 'camisas', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			]

		);

		Category::insert($data);
    }
}
