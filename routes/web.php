<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobVacancyController;
use App\Models\Company;
use App\Models\JobVacancy;
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

Route::get('/vacantes', [JobVacancyController::class, 'index']);
Route::get('/vacantes/{id}', function ($id) {
    $job = JobVacancy::getById($id);
    $company = $job->company;

    return view('vacantes.show', ['company' => $company, 'job' => $job]); // mantenemos 'job' como nombre de variable
});