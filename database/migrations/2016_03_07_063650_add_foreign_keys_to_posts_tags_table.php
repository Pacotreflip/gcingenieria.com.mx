<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPostsTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts_tags', function(Blueprint $table)
		{
			$table->foreign('id_post', 'idpost_fore')->references('id_post')->on('posts')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_tag', 'idtag_fore')->references('id_tag')->on('tags')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts_tags', function(Blueprint $table)
		{
			$table->dropForeign('idpost_fore');
			$table->dropForeign('idtag_fore');
		});
	}

}
