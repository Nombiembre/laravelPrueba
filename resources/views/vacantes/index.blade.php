<x-layout>
    <div class="my-8">
    <h2 class="text-3xl font-bold text-foreground">Vacantes</h2>
  </div>
    <div class="space-y-4 ">
    @forelse ($jobs as $job)
           <x-common.jobCard :job="$job" :endDate=true :showCompany=true/>
    @empty
      <p>No se encuentran compañias por el momento</p>
    @endforelse
    </div>
</x-layout>