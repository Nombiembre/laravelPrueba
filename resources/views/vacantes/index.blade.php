<x-layout>
    <x-common.title href="/vacantes/create" :createButton=true>
    Vacantes
  </x-common.title>
    <div class="space-y-4 ">
    @forelse ($jobs as $job)
           <x-common.jobCard :job="$job" :endDate=true :showCompany=true/>
    @empty
      <p>No se encuentran compañias por el momento</p>
    @endforelse
    </div>

    <div class="mt-4">
      {{ $jobs->links() }}
    </div>
</x-layout>