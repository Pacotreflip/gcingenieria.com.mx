<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts_tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_post')->index('idpost_fore_idx');
			$table->integer('id_tag')->index('idtag_fore_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts_tags');
	}

}
