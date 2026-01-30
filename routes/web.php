<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome', ['text' => 'Hello, World!']);
})->middleware('guest');

Route::get('/about', function () {
	return view('about', ['aboutText' => 'This is the about page.']);
})->middleware('guest');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}', function ($id) {

	if ($id == 5) {
		return redirect()->route('login');
	}

	return view('user', ['userId' => $id]);
});

Route::get('/login', function () {
	return view('login', ['authMessage' => 'Please login to access this page']);
})->name('login');

Route::view()
