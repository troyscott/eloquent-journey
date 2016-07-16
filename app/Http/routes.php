<?php

use Illuminate\Database\Schema\Blueprint;

Route::get('create_books_table', function() {
	echo('Create book table');
	
	Schema::create('books', function(Blueprint $table) {
		
		$table->increments('id');
		$table->string('title', 30);
		$table->integer('pages_count');
		$table->decimal('price',5, 2);
		$table->text('description');
		$table->timestamps();
	});
	
	
});

Route::get('/', function () {
    return view('welcome');
});
