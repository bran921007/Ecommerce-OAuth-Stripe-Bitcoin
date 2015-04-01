<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('body');
			$table->timestamps();
			$table->timestamp('published_at');

//            Borrar los articulos de un usuario cuando este borre su cuenta
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}