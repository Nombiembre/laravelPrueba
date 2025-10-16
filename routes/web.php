<?php

use App\Http\Controllers\CompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/empresas', [CompanyController::class, 'index']);
Route::get('/empresas/{id}', function ($id) {
    $company = Company::with('jobs')->findOrFail($id); // carga empresa + vacantes
    $totalVacantes = $company->jobs()->where('estado', 'publicada')->sum('numero_vacantes');

    return view('empresas.show', ['job' => $company, 'totalVacantes' => $totalVacantes]); // mantenemos 'job' como nombre de variable
});