<x-layout>

  <x-common.title>
    Crear Vacante
  </x-common.title>
  <form class="space-y-6">
    Basic Information Section
    <fieldset class="border-b pb-6">
      <legend class="text-lg font-semibold text-gray-900 mb-4">Basic Information</legend>

      <div class="space-y-4">
        Job Name
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
          <input type="text" id="name" name="name" placeholder="e.g., Senior Developer"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        Description
        <div>
          <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
          <textarea id="description" name="description" rows="4" placeholder="Job description and responsibilities..."
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        City
        <div>
          <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
          <input type="text" id="city" name="city" placeholder="e.g., New York"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </fieldset>

    Compensation Section
    <fieldset class="border-b pb-6">
      <legend class="text-lg font-semibold text-gray-900 mb-4">Compensation</legend>

      <div>
        <label for="salary" class="block text-sm font-medium text-gray-700 mb-1">Salary Range</label>
        <input type="text" id="salary" name="salary" placeholder="e.g., $50,000 - $80,000"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
    </fieldset>

    Requirements Section
    <fieldset class="border-b pb-6">
      <legend class="text-lg font-semibold text-gray-900 mb-4">Requirements</legend>

      <div class="space-y-4">
        Education Level
        <div>
          <label for="education" class="block text-sm font-medium text-gray-700 mb-1">Education Level Required</label>
          <select id="education" name="education"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">Select education level</option>
            <option value="high-school">High School</option>
            <option value="associate">Associate Degree</option>
            <option value="bachelor">Bachelor's Degree</option>
            <option value="master">Master's Degree</option>
            <option value="phd">PhD</option>
          </select>
        </div>

        Years of Experience
        <div>
          <label for="experience" class="block text-sm font-medium text-gray-700 mb-1">Years of Experience
            Required</label>
          <input type="number" id="experience" name="experience" min="0" placeholder="e.g., 5"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        Number of Vacants
        <div>
          <label for="vacants" class="block text-sm font-medium text-gray-700 mb-1">Number of Vacancies</label>
          <input type="number" id="vacants" name="vacants" min="1" placeholder="e.g., 3"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </fieldset>

    Dates Section
    <fieldset class="border-b pb-6">
      <legend class="text-lg font-semibold text-gray-900 mb-4">Dates</legend>

      <div class="space-y-4">
        Created At
        <div>
          <label for="created-at" class="block text-sm font-medium text-gray-700 mb-1">Created At</label>
          <input type="datetime-local" id="created-at" name="created-at"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        End Date
        <div>
          <label for="end-date" class="block text-sm font-medium text-gray-700 mb-1">Application Deadline</label>
          <input type="date" id="end-date" name="end-date"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
    </fieldset>

    Status Section
    <fieldset class="pb-6">
      <legend class="text-lg font-semibold text-gray-900 mb-4">Status</legend>

      <div class="space-y-3">
        <div class="flex items-center">
          <input type="radio" id="published" name="state" value="published"
            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500">
          <label for="published" class="ml-3 text-sm font-medium text-gray-700">Published</label>
        </div>
        <div class="flex items-center">
          <input type="radio" id="closed" name="state" value="closed"
            class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-2 focus:ring-blue-500">
          <label for="closed" class="ml-3 text-sm font-medium text-gray-700">Closed</label>
        </div>
      </div>
    </fieldset>

    Action Buttons
    <div class="flex gap-4 pt-6">
      <button type="submit"
        class="flex-1 bg-blue-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-700 transition">
        Create Job Posting
      </button>
      <button type="reset"
        class="flex-1 bg-gray-200 text-gray-900 font-medium py-2 px-4 rounded-lg hover:bg-gray-300 transition">
        Clear
      </button>
    </div>
  </form>
</x-layout>
