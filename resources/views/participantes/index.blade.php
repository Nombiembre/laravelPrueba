<x-layout>
  <x-common.title href="/participantes/create" :createButton=true>
    Participantes
  </x-common.title>

  <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">
    <table class="w-full">
      <thead class="bg-gray-100 border-b border-gray-200">
        <tr>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Documento</th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Nombre Completo</th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Correo</th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Ciudad</th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Estado</th>
          <th class="px-6 py-4 text-left text-sm font-semibold text-gray-900">Es Joven</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @forelse ($users as $user)
          <x-common.userItem :user="$user"  />
        @empty
          <p>No se encuentran compañias por el momento</p>
        @endforelse
      </tbody>
    </table>
  </div>


  <div class="mt-8 flex items-center justify-between">
    <p class="text-sm text-gray-600">Page 1 of 5</p>
    <div class="flex gap-2">
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
      <span class="px-4 py-2 text-sm text-gray-600">...</span>
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">5</a>
      <a href="#"
        class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
    </div>
  </div>
</x-layout>
