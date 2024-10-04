<?php

use App\Livewire\ShowUser;
use App\Livewire\MonComposant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('composant', MonComposant::class);
Route::get('user/{user}', ShowUser::class);