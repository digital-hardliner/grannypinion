<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration {
	public function up() {
		Schema::create('messages', function (Blueprint $table) {
			$table->increments('id');
			$table->timestamps('created_at');
			$table->string('text');
			$table->string('conversation_id');
			$table->string('receiving_user_id');
			$table->string('sending_user_id');
		});
	}

	public function down() {
		Schema::dropIfExists('messages');
	}
}
