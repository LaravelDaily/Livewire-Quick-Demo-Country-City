<?php

use App\Livewire\CompanyCreate;
use App\Livewire\CompanyEdit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('companies/create', CompanyCreate::class)
    ->name('companies.create');
Route::get('companies/{company}/edit', CompanyEdit::class)
    ->name('companies.edit');
