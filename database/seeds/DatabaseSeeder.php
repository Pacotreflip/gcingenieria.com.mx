<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\Models\User, App\Models\Contact, App\Models\Post, App\Models\Tag, App\Models\PostTag, App\Models\Comment;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Role::create([
			'title' => 'Administrator',
			'slug' => 'admin'
		]);

		User::create([
			'username' => 'Gazpar Gloria',
			'email' => 'gazpargloria@gcingenieria.com.mx',
			'password' => bcrypt('GGGCI*16'),
			'seen' => true,
			'role_id' => 1,
			'confirmed' => true
		]);

		User::create([
			'username' => 'Leonardo Balderas',
			'email' => 'leonardobalderas@gcingenieria.com.mx',
			'password' => bcrypt('LBGCI*16'),
			'seen' => true,
			'role_id' => 1,
			'valid' => true,
			'confirmed' => true
		]);
	}

}
