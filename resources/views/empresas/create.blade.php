<x-layout>

  <x-common.title classes="max-w-3xl mx-auto w-full">
    Crear Empresa
  </x-common.title>

  <form method="POST" action="/empresas" class="max-w-3xl mx-auto space-y-6">
    @csrf

    {{-- NIT --}}
    <div>
      <label for="nit" class="block text-sm font-medium text-gray-700 mb-1">NIT</label>
      <input
        type="text"
        id="nit"
        name="nit"
        value="{{ old('nit') }}"
        placeholder="p. ej. 900123456-7"
        pattern="^\d{7,10}(-\d)?$"
        title="Formato esperado: 900123456-7 (números y opcional -dígito)"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      @error('nit')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    {{-- Nombre de la empresa --}}
    <div>
      <label for="nombre_empresa" class="block text-sm font-medium text-gray-700 mb-1">Nombre de la empresa</label>
      <input
        type="text"
        id="nombre_empresa"
        name="nombre_empresa"
        value="{{ old('nombre_empresa') }}"
        placeholder="p. ej. TechSolutions SAS"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      @error('nombre_empresa')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    {{-- Email --}}
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        value="{{ old('email') }}"
        placeholder="contacto@empresa.com"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      @error('email')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    {{-- Teléfono --}}
    <div>
      <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
      <input
        type="tel"
        id="telefono"
        name="telefono"
        value="{{ old('telefono') }}"
        placeholder="10 dígitos: 3001234567"
        pattern="^\d{10}$"
        inputmode="numeric"
        maxlength="10"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      @error('telefono')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    {{-- Ciudad --}}
    <div>
      <label for="ciudad" class="block text-sm font-medium text-gray-700 mb-1">Ciudad</label>
      <input
        type="text"
        id="ciudad"
        name="ciudad"
        value="{{ old('ciudad') }}"
        placeholder="p. ej. Bogotá"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      @error('ciudad')
        <span class="text-sm font-semibold text-red-700">{{ $message }}</span>
      @enderror
    </div>

    {{-- Submit --}}
    <div>
      <button
        type="submit"
        class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition"
      >
        Crear Empresa
      </button>
    </div>

  </form>
</x-layout>
