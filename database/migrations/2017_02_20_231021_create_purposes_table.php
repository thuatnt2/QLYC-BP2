<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurposesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purposes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('symbol');
            $table->string('group');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purposes');
	}

}
