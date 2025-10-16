<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobVacancyController;
use App\Http\Controllers\ParticipantController;
use App\Models\Company;
use App\Models\JobVacancy;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/empresas', [CompanyController::class, 'index']);
Route::get('/empresas/create', [CompanyController::class, 'create']);
Route::post('/empresas', function () {

    $data = request()->validate([
        'nit' => ['required','string','regex:/^\d{7,10}(-\d)?$/','unique:companies,nit'],
        'nombre_empresa' => 'required|string|max:255',
        'email' => 'required|email|unique:companies,email',
        'telefono' => 'required|digits:10',
        'ciudad' => 'required|string|max:255',
    ]);

    Company::create($data);
    return redirect('/empresas');
   
});
Route::get('/empresas/{id}', function ($id) {
    $company = Company::with('jobs')->findOrFail($id); // carga empresa + vacantes
    $totalVacantes = $company->jobs()->where('estado', 'publicada')->sum('numero_vacantes');

    return view('empresas.show', ['job' => $company, 'totalVacantes' => $totalVacantes]); // mantenemos 'job' como nombre de variable
});

Route::get('/vacantes', [JobVacancyController::class, 'index']);
Route::post('/vacantes', function () {
    $data = request()->validate([
        'company_id' => ['required', 'exists:companies,id'],
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'salario' => 'required|numeric|min:1300000',
        'ciudad' => 'required|string|max:255',
        'nivel_educativo' => 'required|in:bachillerato,tecnico,tecnologo,profesional',
        'años_experiencia' => 'required|integer|min:0',
        'numero_vacantes' => 'required|integer|min:1',
        'fecha_cierre' => 'required|date|after:today',
        'estado' => 'nullable|in:publicada,cerrada',
    ]);
    JobVacancy::create($data);
    return redirect('/vacantes');
});
Route::get('/vacantes/create', [JobVacancyController::class, 'create']);
Route::get('/vacantes/{id}', function ($id) {
    $job = JobVacancy::getById($id);
    $company = $job->company;

    return view('vacantes.show', ['company' => $company, 'job' => $job]); // mantenemos 'job' como nombre de variable
});

Route::get('/participantes', [ParticipantController::class, 'index']);
Route::get('/participantes/create', [ParticipantController::class, 'create']);
Route::post('/participantes', function () {
    $data = request()->validate([
        'numero_documento' => 'required|unique:participants,numero_documento',
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'email' => 'required|email|unique:participants,email',
        'telefono' => 'required|digits:10',
        'fecha_nacimiento' => 'required|date|before_or_equal:' . now()->subYears(18)->toDateString(),
        'ciudad' => 'required|string|max:255',
        'nivel_educativo' => 'required|in:bachillerato,técnico,tecnólogo,profesional',
        'años_experiencia' => 'required|integer|min:0|max:50',
    ]);

    $edad = Carbon::parse($data['fecha_nacimiento'])->age;
    $data['es_joven'] = $edad < 29;

    // Crear participante
    Participant::create($data);
    return redirect('/participantes');
    
});
Route::get('/participantes/{id}', [ParticipantController::class, 'show'])->name('participantes.show');
