<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // timestamps comunes
        $now = Carbon::now()->format('Y-m-d H:i:s');

        // 1) Crear 3 empresas manualmente y guardar sus IDs
        $companiesData = [
            [
                'nit' => '900123456-1',
                'nombre_empresa' => 'TechSolutions SAS',
                'email' => 'contact@techsolutions.example',
                'telefono' => '3123456789',
                'ciudad' => 'Bogotá',
                'estado' => 'activa',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nit' => '901234567-2',
                'nombre_empresa' => 'AgroVida S.A.S',
                'email' => 'info@agrovida.example',
                'telefono' => '3132345678',
                'ciudad' => 'Cali',
                'estado' => 'activa',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nit' => '902345678-3',
                'nombre_empresa' => 'NovaWorks S.A.S',
                'email' => 'hello@novaworks.example',
                'telefono' => '3143456787',
                'ciudad' => 'Medellín',
                'estado' => 'activa',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $companyIds = [];
        foreach ($companiesData as $company) {
            $companyIds[] = DB::table('companies')->insertGetId($company);
        }

        // 2) Crear 10 participantes (datos fijos)
        $participantsData = [
            [
                'numero_documento' => '10000001',
                'nombres' => 'Juan',
                'apellidos' => 'Pérez',
                'email' => 'juan.perez@example.com',
                'telefono' => '3001112233',
                'fecha_nacimiento' => '1998-06-15', // joven
                'ciudad' => 'Bogotá',
                'nivel_educativo' => 'profesional',
                'años_experiencia' => 3,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000002',
                'nombres' => 'María',
                'apellidos' => 'Gómez',
                'email' => 'maria.gomez@example.com',
                'telefono' => '3002223344',
                'fecha_nacimiento' => '1990-04-10', // no joven
                'ciudad' => 'Cali',
                'nivel_educativo' => 'tecnólogo',
                'años_experiencia' => 8,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000003',
                'nombres' => 'Carlos',
                'apellidos' => 'Ruiz',
                'email' => 'carlos.ruiz@example.com',
                'telefono' => '3003334455',
                'fecha_nacimiento' => '2000-09-20', // joven
                'ciudad' => 'Medellín',
                'nivel_educativo' => 'bachillerato',
                'años_experiencia' => 1,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000004',
                'nombres' => 'Ana',
                'apellidos' => 'Martínez',
                'email' => 'ana.martinez@example.com',
                'telefono' => '3004445566',
                'fecha_nacimiento' => '1985-12-01', // no joven
                'ciudad' => 'Barranquilla',
                'nivel_educativo' => 'profesional',
                'años_experiencia' => 12,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000005',
                'nombres' => 'Diego',
                'apellidos' => 'Torres',
                'email' => 'diego.torres@example.com',
                'telefono' => '3005556677',
                'fecha_nacimiento' => '1997-03-08', // joven
                'ciudad' => 'Bucaramanga',
                'nivel_educativo' => 'técnico',
                'años_experiencia' => 4,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000006',
                'nombres' => 'Lucía',
                'apellidos' => 'Sosa',
                'email' => 'lucia.sosa@example.com',
                'telefono' => '3006667788',
                'fecha_nacimiento' => '1995-11-30', // no joven (29)
                'ciudad' => 'Pereira',
                'nivel_educativo' => 'tecnólogo',
                'años_experiencia' => 6,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000007',
                'nombres' => 'Andrés',
                'apellidos' => 'López',
                'email' => 'andres.lopez@example.com',
                'telefono' => '3007778899',
                'fecha_nacimiento' => '2001-01-05', // joven
                'ciudad' => 'Cali',
                'nivel_educativo' => 'bachillerato',
                'años_experiencia' => 0,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000008',
                'nombres' => 'Sofía',
                'apellidos' => 'Ramírez',
                'email' => 'sofia.ramirez@example.com',
                'telefono' => '3008889900',
                'fecha_nacimiento' => '1988-08-22', // no joven
                'ciudad' => 'Medellín',
                'nivel_educativo' => 'profesional',
                'años_experiencia' => 10,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000009',
                'nombres' => 'Mateo',
                'apellidos' => 'Herrera',
                'email' => 'mateo.herrera@example.com',
                'telefono' => '3009990011',
                'fecha_nacimiento' => '1999-07-30', // joven
                'ciudad' => 'Bogotá',
                'nivel_educativo' => 'técnico',
                'años_experiencia' => 2,
                'estado' => 'activo',
            ],
            [
                'numero_documento' => '10000010',
                'nombres' => 'Paula',
                'apellidos' => 'Vega',
                'email' => 'paula.vega@example.com',
                'telefono' => '3001011121',
                'fecha_nacimiento' => '1996-09-10', // cumple 29 en 2025 -> no joven
                'ciudad' => 'Cartagena',
                'nivel_educativo' => 'tecnólogo',
                'años_experiencia' => 5,
                'estado' => 'activo',
            ],
        ];

        // Insertar participantes calculando es_joven y timestamps
        foreach ($participantsData as $p) {
            $born = Carbon::parse($p['fecha_nacimiento']);
            $isYoung = $born->age < 29; // menor de 29 -> true
            DB::table('participants')->insert(array_merge($p, [
                'es_joven' => $isYoung,
                'created_at' => $now,
                'updated_at' => $now,
            ]));
        }

        // 3) Crear 8 vacantes y asignarlas a las empresas en round-robin
        $vacanciesData = [
            [
                'titulo' => 'Desarrollador Backend Junior',
                'descripcion' => 'Desarrollo de APIs en PHP/Laravel. Trabajo en equipo y ganas de aprender.',
                'salario' => 1800000,
                'ciudad' => 'Bogotá',
                'nivel_educativo' => 'tecnólogo',
                'experiencia_minima_años' => 1,
                'numero_vacantes' => 2,
                'fecha_cierre' => 30,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Analista de Datos',
                'descripcion' => 'Análisis y visualización de datos, creación de reportes.',
                'salario' => 2200000,
                'ciudad' => 'Medellín',
                'nivel_educativo' => 'profesional',
                'experiencia_minima_años' => 2,
                'numero_vacantes' => 1,
                'fecha_cierre' => 45,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Auxiliar Administrativo',
                'descripcion' => 'Funciones administrativas y atención al cliente.',
                'salario' => 1400000,
                'ciudad' => 'Cali',
                'nivel_educativo' => 'bachillerato',
                'experiencia_minima_años' => 0,
                'numero_vacantes' => 1,
                'fecha_cierre' => 20,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Ingeniero DevOps',
                'descripcion' => 'Infraestructura, CI/CD y automatización.',
                'salario' => 4000000,
                'ciudad' => 'Bogotá',
                'nivel_educativo' => 'profesional',
                'experiencia_minima_años' => 3,
                'numero_vacantes' => 1,
                'fecha_cierre' => 60,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Diseñador UX/UI',
                'descripcion' => 'Diseño de interfaces y experiencias digitales.',
                'salario' => 2000000,
                'ciudad' => 'Medellín',
                'nivel_educativo' => 'técnico',
                'experiencia_minima_años' => 2,
                'numero_vacantes' => 1,
                'fecha_cierre' => 25,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Representante Comercial',
                'descripcion' => 'Gestión de cuentas y prospección de clientes.',
                'salario' => 1600000,
                'ciudad' => 'Cali',
                'nivel_educativo' => 'bachillerato',
                'experiencia_minima_años' => 1,
                'numero_vacantes' => 2,
                'fecha_cierre' => 40,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Soporte Técnico',
                'descripcion' => 'Resolución de incidencias y soporte a usuarios finales.',
                'salario' => 1500000,
                'ciudad' => 'Bogotá',
                'nivel_educativo' => 'técnico',
                'experiencia_minima_años' => 0,
                'numero_vacantes' => 1,
                'fecha_cierre' => 15,
                'estado' => 'publicada',
            ],
            [
                'titulo' => 'Project Manager',
                'descripcion' => 'Gestión de proyectos, planificación y coordinación de equipos.',
                'salario' => 4500000,
                'ciudad' => 'Medellín',
                'nivel_educativo' => 'profesional',
                'experiencia_minima_años' => 5,
                'numero_vacantes' => 1,
                'fecha_cierre' => 90,
                'estado' => 'publicada',
            ],
        ];

        // Insertar vacantes asignando company_id en round-robin
        $companyCount = count($companyIds);
        foreach ($vacanciesData as $index => $v) {
            $companyIndex = $index % $companyCount; // 0..n-1
            $companyId = $companyIds[$companyIndex];

            DB::table('job_vacancies')->insert([
                'company_id' => $companyId,
                'titulo' => $v['titulo'],
                'descripcion' => $v['descripcion'],
                'salario' => $v['salario'],
                'ciudad' => $v['ciudad'],
                'nivel_educativo' => $v['nivel_educativo'],
                'años_experiencia' => $v['experiencia_minima_años'],
                'numero_vacantes' => $v['numero_vacantes'],
                'fecha_cierre' => Carbon::now()->addDays($v['fecha_cierre'])->format('Y-m-d'),
                'estado' => $v['estado'],
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $this->command->info('Seed completed: 3 companies, 10 participants, 8 job vacancies.');
    }
}
