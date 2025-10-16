<x-layout>
  <div class="my-8">
    <h2 class="text-3xl font-bold text-foreground">Detalles del Participante</h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr]  gap-6">

    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6 ">
      <h2 class="text-lg font-semibold text-gray-900 mb-4">Información Personal</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Documento</label>
          <p class="text-gray-900 font-medium">{{ $participante->numero_documento }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Estado</label>
          <span @class([
              'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium',
              'bg-green-100 text-green-800' => $participante->estado === 'activo',
              'bg-purple-100 text-purple-800 ' => $participante->estado === 'colocado',
          ])>
            {{ $participante->estado }}
          </span>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Nombres</label>
          <p class="text-gray-900 font-medium">{{ $participante->nombres }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Apellidos</label>
          <p class="text-gray-900 font-medium">{{ $participante->apellidos }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Fecha de Nacimiento</label>
          <p class="text-gray-900 font-medium">{{ \Carbon\Carbon::parse($participante->fecha_nacimiento)->isoFormat('DD-MM-YYYY') }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Edad</label>
          <p class="text-gray-900 font-medium">{{ \Carbon\Carbon::parse($participante->fecha_nacimiento)->age }}</p>
        </div>
        @if ($participante->es_joven === 1)
          <div>
            <span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800'>
              Joven
            </span>
          </div>
        @endif
      </div>
    </div>

    <div class="bg-white rounded-lg border border-gray-200 p-6 sticky top-6 md:row-span-2 h-fit">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">Información Profesional</h3>
      <div class="space-y-4">
        <div class="pb-4 border-b border-gray-200">
          <p class="text-sm text-gray-600 mb-1">Nivel de Educación</p>
          <p class="font-semibold text-gray-900 capitalize">{{ $participante->nivel_educativo }}</p>
        </div>
        <div class="pb-4  border-gray-200">
          <p class="text-sm text-gray-600 mb-1">Años de Experiencia</p>
          <p class="font-semibold text-gray-900">
            @if ($participante->años_experiencia === 1)
              1 Año de Experiencia
            @else
              {{ $participante->años_experiencia }} Años de Experiencia
            @endif
          </p>
        </div>
      </div>
    </div>

    <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6 ">
      <h2 class="text-lg font-semibold text-gray-900 mb-4">Información de Contacto</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Correo</label>
          <p class="text-gray-900 font-medium">{{ $participante->email }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Telefono</label>
          <p class="text-gray-900 font-medium">{{ $participante->telefono }}</p>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-600 mb-1">Ciudad</label>
          <p class="text-gray-900 font-medium">{{ $participante->ciudad }}</p>
        </div>
      </div>
    </div>
</x-layout>
