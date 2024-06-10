<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


admin.php

Route::get('/', 'HomeController@index')->name('dashboard');
