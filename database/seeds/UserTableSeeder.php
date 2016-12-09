<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
				'name' 		=> 'victor vidal', 
				'last_name' => 'Rodriguez bejarano', 
				'email' 	=> 'vic_tor_rb@hotmail.com', 
				'user' 		=> 'victor',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'calle luis m rojas 1837',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'dare', 
				'last_name' => 'plata', 
				'email' 	=> 'dare@hotmail.com', 
				'user' 		=> 'dare',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'por aqui por alla un no se que bla bla ',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
