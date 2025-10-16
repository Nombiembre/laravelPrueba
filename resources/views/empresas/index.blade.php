<x-layout>
  <div class="my-8">
    <h2 class="text-3xl font-bold text-foreground">Empresas</h2>
  </div>
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    @forelse ($companies as $company)
      <div class="flex flex-col rounded-lg border border-slate-200 bg-white p-6 shadow-sm transition-all  space-y-3">

        <div class="flex items-center gap-3">
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-900">{{ $company->nombre_empresa }}</h3>
            <div class="text-sm text-slate-600">
              <span>Nit: </span>
              <span>{{ $company->nit }}</span>
            </div>
          </div>

          <div>
            <span
              class="inline-flex items-center rounded-full bg-slate-100 px-3 py-1 text-sm font-medium text-slate-700">
              {{ $company->estado }}
            </span>
          </div>
        </div>

        <div class="mb-6">
          <div class="flex gap-2 text-slate-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 self-end"
              viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
              <path class="fill-current"
                d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
            </svg>
            <p>{{ $company->email }}</p>
          </div>

          <div class="flex gap-2 text-slate-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 self-end"
              viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
              <path class="fill-current"
                d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z" />
            </svg>
            <p>{{ $company->ciudad }}</p>
          </div>
        </div>


        <x-common.button href="/empresas/{{ $company->id }}">
          Ver Trabajos
        </x-common.button>
      </div>
    @empty
      <p>No se encuentran compañias por el momento</p>
    @endforelse

  </div>
</x-layout>
