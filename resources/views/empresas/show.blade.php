<x-layout>
  <div class="flex items-start justify-between mb-4">
    <div>
      <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $job->nombre_empresa }}</h1>
    </div>
    <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">{{ $job->estado }}</span>
  </div>

  <!-- Company Details Grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-y border-gray-400 py-6 mb-6">
    <div>
      <p class="text-sm text-gray-500 mb-1">Nit</p>
      <p class="text-gray-900 font-medium">{{ $job->nit }}</p>
    </div>
    <div>
      <p class="text-sm text-gray-500 mb-1">Correo</p>
      <p class="text-gray-900 font-medium">{{ $job->email }}</p>
    </div>
    <div>
      <p class="text-sm text-gray-500 mb-1">Telefono</p>
      <p class="text-gray-900 font-medium">{{ $job->telefono }}</p>
    </div>
    <div>
      <p class="text-sm text-gray-500 mb-1">Ciudad</p>
      <p class="text-gray-900 font-medium">{{ $job->ciudad }}</p>
    </div>
    <div>
      <p class="text-sm text-gray-500 mb-1">Creada en</p>
      <p class="text-gray-900 font-medium">{{ \Carbon\Carbon::parse($job->created_at)
       ->locale('es') 
       ->isoFormat('D [de] MMMM [de] YYYY') }}</p>
    </div>
    <div>
      <p class="text-sm text-gray-500 mb-1">Total Vacantes</p>
      <p class="text-gray-900 font-medium">{{ $totalVacantes }}</p>
    </div>
  </div>

  <section>
    <div class="flex items-center gap-2 text-2xl font-bold text-gray-900 mb-6">
      <h2 class="">Ofertas de Empleo</h2>
      <span>({{ $job->jobs->count() }})</span>
    </div>
    <div class="space-y-4">

      <!-- Job Listings Section -->
      @if (!$job->jobs || $job->jobs->isEmpty())
        <p class="text-gray-500 italic">Esta empresa no tiene vacantes activas.</p>
      @else
        @foreach ($job->jobs as $vacancy)
           <x-common.jobCard :job="$vacancy" />
        @endforeach
      @endif


      <!-- Job Card 1 -->

    </div>
</x-layout>
