@props(['user'])

<tr class="hover:bg-gray-50 cursor-pointer" onclick="window.location='{{ route('participantes.show', $user->id) }}'">
  <td class="px-6 py-4 text-sm text-gray-600">{{ $user->numero_documento }}</td>
  <td class="px-6 py-4 text-sm text-gray-600">{{ $user->nombres }} {{ $user->apellidos }}</td>
  <td class="px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
  <td class="px-6 py-4 text-sm text-gray-600">{{ $user->ciudad }}</td>
  <td class="px-6 py-4 ">
    <span @class([
        'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium',
        'bg-green-100 text-green-800' => $user->estado === 'activo',
        'bg-purple-100 text-purple-800 ' => $user->estado === 'colocado',
    ])>
      {{ $user->estado }}
    </span>
  </td>
  <td class="px-6 py-4 ">
    <span @class([
        'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium',
        'bg-green-100 text-green-800' => $user->es_joven === 1,
        'text-red-800 bg-red-100' => $user->es_joven !== 1,
    ])>
      @if ($user->es_joven === 1)
        Si
      @else
        No
      @endif
    </span>
  </td>
</tr>
