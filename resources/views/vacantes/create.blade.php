<x-layout>

  <x-common.title classes="max-w-3xl mx-auto w-full">
    Crear Vacante
  </x-common.title>
  <form method="POST" action="/vacantes" class="max-w-3xl mx-auto">
    @csrf

    <div class="space-y-4">
      <div>
        <label for="titulo" class="block text-sm font-medium text-gray-700 mb-1">Titulo de la Vacante</label>
        <input type="text" id="titulo" name="titulo" placeholder="p. ej. Senior Developer"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('titulo')
          <span class="text-sm font-semibold text-red-700">
            {{ $message }}
          </span>
        @enderror
      </div>

      <div>

        <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
        <textarea id="descripcion" name="descripcion" rows="4" placeholder="Job description and responsibilities..."
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        @error('descripcion')
          <span class="text-sm font-semibold text-red-700">
            {{ $message }}
          </span>
        @enderror
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div>
          <label for="ciudad" class="block text-sm font-medium text-gray-700 mb-1">Ciudad</label>
          <input type="text" id="ciudad" name="ciudad" placeholder="p. ej. Cali"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('ciudad')
            <span class="text-sm font-semibold text-red-700">
              {{ $message }}
            </span>
          @enderror
        </div>
        <div>
          <label for="salario" class="block text-sm font-medium text-gray-700 mb-1">Salario</label>
          <input type="text" id="salario" name="salario" placeholder="p. ej. $1400000"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('salario')
            <span class="text-sm font-semibold text-red-700">
              {{ $message }}
            </span>
          @enderror
        </div>
        <div>
          <label for="años_experiencia" class="block text-sm font-medium text-gray-700 mb-1">Años de experiencia
            Requeridos</label>
          <input type="number" id="años_experiencia" name="años_experiencia" placeholder="p. ej. 5"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('años_experiencia')
            <span class="text-sm font-semibold text-red-700">
              {{ $message }}
            </span>
          @enderror
        </div>
        <div>
          <label for="numero_vacantes" class="block text-sm font-medium text-gray-700 mb-1">Número de vacantes</label>
          <input type="number" id="numero_vacantes" name="numero_vacantes" placeholder="p. ej. 23"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          @error('numero_vacantes')
            <span class="text-sm font-semibold text-red-700">
              {{ $message }}
            </span>
          @enderror
        </div>
      </div>

      <label for="fecha_cierre" class="block text-sm font-medium text-gray-700 mb-1">Fecha límite de solicitud</label>
      <input type="date" id="fecha_cierre" name="fecha_cierre"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      @error('fecha_cierre')
        <span class="text-sm font-semibold text-red-700">
          {{ $message }}
        </span>
      @enderror


      <label for="nivel_educativo" class="block text-sm font-medium text-gray-700 mb-1">Nivel de educación
        requerido</label>
      <select id="nivel_educativo" name="nivel_educativo"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">Seleccione una opción</option>
        <option value="bachillerato">Bachillerato</option>
        <option value="tecnico">Técnico</option>
        <option value="tecnologo">Tecnólogo</option>
        <option value="profesional">profesional</option>
      </select>
      @error('nivel_educativo')
        <span class="text-sm font-semibold text-red-700">
          {{ $message }}
        </span>
      @enderror

      <label for="company" class="block text-sm font-medium text-gray-700 mb-1">
        Escoge una empresa
      </label>

      <select id="company_id" name="company_id"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">Seleccione una empresa</option>

        @foreach ($companies as $company)
          <option value="{{ $company->id }}">{{ $company->nombre_empresa }}</option>
        @endforeach
      </select>

      @error('company_id')
        <span class="text-sm font-semibold text-red-700">
          {{ $message }}
        </span>
      @enderror

      <button type="submit"
        class="flex-1 w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition cursor-pointer">
        Crear
      </button>

  </form>
</x-layout>
