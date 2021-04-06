<?php
	Route::resource('book', 'Book_controller');
    Route::get('/', function(){
		return view('index');
	});
    Route::dispatch();
?>
