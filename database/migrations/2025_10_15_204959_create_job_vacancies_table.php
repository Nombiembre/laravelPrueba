<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('company_id');
            $table->text('titulo');
            $table->text('descripcion');
            $table->text('salario', 12,2)->check('salario >= 1300000');
            $table->string('ciudad');
            $table->enum('nivel_educativo', ['bachillerato', 'tecnico', 'tecnologo', 'profesional']);
            $table->unsignedTinyInteger('años_experiencia');
            $table->unsignedSmallInteger('numero_vacantes')->deffault(1);
            $table->date('fecha_cierre');
            $table->enum('estado', ['publicada', 'cerrada'])->default('publicada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
