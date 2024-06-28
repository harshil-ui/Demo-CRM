<?php

use App\Livewire\Charts\Chartjs;
use App\Livewire\Forms\BasicElements;
use App\Livewire\Icons\Mdi;
use App\Livewire\Pages\Home;
use App\Livewire\Tables\BasicTable;
use App\Livewire\UiFeatures\Buttons;
use App\Livewire\UiFeatures\Typography;
use App\Livewire\UserPages\Login;
use App\Livewire\UserPages\Register;
use App\Livewire\UserPages\Register2;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/buttons', Buttons::class)->name('buttons');

Route::get('/typography', Typography::class)->name('typography');

Route::get('/form', BasicElements::class)->name('forms');

Route::get('/charts', Chartjs::class)->name('charts');

Route::get('/tables', BasicTable::class)->name('tables');

Route::get('/icons', Mdi::class)->name('icons');

Route::get('/login', Login::class)->name('login');

Route::get('/login-2', Login::class)->name('login-2');

Route::get('/register', Register::class)->name('register');

Route::get('/register-2', Register2::class)->name('register-2');
