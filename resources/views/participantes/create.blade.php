<x-layout>

  <x-common.title classes="max-w-3xl mx-auto w-full">
    Crear Participante
  </x-common.title>

  <form method="POST" action="/participantes" class="max-w-3xl mx-auto space-y-6">
    @csrf

    <div>
      <label for="numero_documento" class="block text-sm font-medium text-gray-700 mb-1">Número de documento</label>
      <input type="text" id="numero_documento" name="numero_documento" value="{{ old('numero_documento') }}"
        placeholder="p. ej. 10000001"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      @error('numero_documento')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div>
        <label for="nombres" class="block text-sm font-medium text-gray-700 mb-1">Nombres</label>
        <input type="text" id="nombres" name="nombres" value="{{ old('nombres') }}" placeholder="p. ej. Juan"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('nombres')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="apellidos" class="block text-sm font-medium text-gray-700 mb-1">Apellidos</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ old('apellidos') }}" placeholder="p. ej. Pérez"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('apellidos')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="p. ej. juan@example.com"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('email')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" placeholder="10 dígitos: 3001234567"
          pattern="^\d{10}$" inputmode="numeric" maxlength="10"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('telefono')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div>
        <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700 mb-1">Fecha de nacimiento</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('fecha_nacimiento')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="ciudad" class="block text-sm font-medium text-gray-700 mb-1">Ciudad</label>
        <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" placeholder="p. ej. Bogotá"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('ciudad')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <div>
        <label for="nivel_educativo" class="block text-sm font-medium text-gray-700 mb-1">Nivel educativo</label>
        <select id="nivel_educativo" name="nivel_educativo"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Seleccione una opción</option>
          <option value="bachillerato" {{ old('nivel_educativo') == 'bachillerato' ? 'selected' : '' }}>Bachillerato</option>
          <option value="técnico" {{ old('nivel_educativo') == 'técnico' ? 'selected' : '' }}>Técnico</option>
          <option value="tecnólogo" {{ old('nivel_educativo') == 'tecnólogo' ? 'selected' : '' }}>Tecnólogo</option>
          <option value="profesional" {{ old('nivel_educativo') == 'profesional' ? 'selected' : '' }}>Profesional</option>
        </select>
        @error('nivel_educativo')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>

      <div>
        <label for="años_experiencia" class="block text-sm font-medium text-gray-700 mb-1">Años de experiencia</label>
        <input type="number" id="años_experiencia" name="años_experiencia" value="{{ old('años_experiencia', 0) }}"
          min="0" max="50" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('años_experiencia')
          <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
        @enderror
      </div>
    </div>

    <div>
      <button type="submit"
        class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition">
        Crear Participante
      </button>
    </div>

  </form>
</x-layout>
