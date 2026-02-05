<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
	return view('home');
})->name('home');

Route::get('/users', function () {
	return view('users', ['users' => User::all()]);
})->name('users.index');

Route::get('/users/{user}', function (User $user) {
	return view('profile', ['user' => $user]);
})->name('users.profile');

Route::delete('users/{user}', function (User $user) {
	$user->delete();
	return redirect()->route('users.index');
})->name('users.destroy');
