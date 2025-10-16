<x-layout>
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class="lg:col-span-1">
      <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h3 class="text-sm font-semibold text-gray-600 uppercase tracking-wide mb-4">Empresa</h3>

        <div class="space-y-4">
          <div>
            <p class="text-2xl font-bold text-gray-900">{{ $company->nombre_empresa }}</p>
          </div>

          <div class="border-t border-gray-200 pt-4">
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Email</p>
            <p class="text-sm text-gray-900">{{ $company->email }}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Phone</p>
            <p class="text-sm text-gray-900">{{ $company->telefono }}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Location</p>
            <p class="text-sm text-gray-900">{{ $company->ciudad }}</p>
          </div>

          <x-common.button href="/empresas/{{ $company->id }}">
          Ver empresa
        </x-common.button>
        </div>
      </div>
    </div>

    
    <div class="lg:col-span-2 space-y-6 ">

      <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="flex items-start justify-between mb-4">
          <div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">{{$job->titulo}}</h1>
            <p class="text-gray-600">{{$job->ciudad}}</p>
          </div>
          <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">{{$job->estado}}</span>
        </div>

        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-gray-200">
          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Salario</p>
            <p class="text-lg font-semibold text-gray-900">${{ number_format($job->salario, 0, ',', '.') }}</p>
          </div>
          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Vacantes</p>
            <p class="text-lg font-semibold text-gray-900">{{$job->numero_vacantes}}</p>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg border border-gray-200 p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Descripción</h2>
        <p class="text-gray-700 leading-relaxed">
          {{$job->descripcion}}
         
        </p>
      </div>

      <div class="bg-white rounded-lg border border-gray-200 p-6 capitalize">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Requerimientos</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-2">Nivel de Educación</p>
            <p class="text-gray-900 font-medium">{{$job->nivel_educativo}}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-2">Años de Experiencia</p>
            <p class="text-gray-900 font-medium">{{$job->años_experiencia}} years</p>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-lg border border-gray-200 p-6 ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-2">Publicado el</p>
            <p class="text-gray-900">{{ \Carbon\Carbon::parse($job->created_at)
       ->locale('es') 
       ->isoFormat('D [de] MMMM [de] YYYY') }}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500 uppercase tracking-wide mb-2">Fecha límite de solicitud</p>
            <p class="text-gray-900">{{ \Carbon\Carbon::parse($job->fecha_cierre)
       ->locale('es') 
       ->isoFormat('D [de] MMMM [de] YYYY') }}</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</x-layout>
