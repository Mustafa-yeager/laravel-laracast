<html>
    <head>
        <title>Edit page</title>
    </head>
<x-layout>
<x-header-layout>Edit {{ $jobs_list->title }}</x-header-layout>



<form method="POST" action="/job_list/{{ $jobs_list->id }}">
    @csrf
    @method('PATCH')
  <div class="space-y-12">


    <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base/7 font-semibold text-gray-900">Edit Selected Job</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <input type="text" name="title" id="title" value="{{ $jobs_list->title }}" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('title')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <input type="text" name="salary" id="salary" value="{{ $jobs_list->salary }}" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('salary')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
        </div>
        </div>
      </div>
    </div>


  </div>
<div>

</div>
  <div class="mt-6 flex items-center justify-between gap-x-6">
  <button type="submit" form="delete_form" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-3 mb-2">Delete</button>

         <div> <a href="/job_list/{{ $jobs_list->id }}" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
         <button type="submit" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
         </div>

  </div>
</form>

<form method="post" action="/job_list/{{ $jobs_list->id }}" class="hidden" id="delete_form" name="delete_form">
@csrf
@method('DELETE')
</form>


</x-layout>
</html>
