<html>
    <head>
        <title>{{ $jobs_list['title'] }} page</title>
    </head>
<x-layout>
<x-header-layout>{{ $jobs_list['title'] }} Page</x-header-layout>

    <h2 class="block font-bold px-4 py-3 text-gray-600 ">Hello from {{ $jobs_list['title'] }} Page</h2>
    <br>


<div class="grid gap-3 mb-4 md:grid-cols-2">
        <div>
        <label class="font-bold text-blue-500 text-sm">Title </label>

            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">   {{ $jobs_list['title'] }}</label>
        </div>

        <div>
        <label class="font-bold text-blue-500 text-sm">Employer Name </label>

            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">   {{ $jobs_list->contact2->name }}</label>
        </div>

        <div>
        <label class="font-bold text-blue-500 text-sm">Salary </label>
            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">  {{ $jobs_list['salary'] }} p/h</label>
        </div>

        <div>
        <label class="font-bold text-blue-500 text-sm">Created at </label>

            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">  {{ $jobs_list['created_at'] }}</label>
        </div>

        <div>
        <label class="font-bold text-blue-500 text-sm">Updated at </label>

            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">  {{ $jobs_list['updated_at'] }}</label>
        </div>


</div>
<p class="mt-5 ml-10">
<a href="/job_list/{{ $jobs_list->id }}/edit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit</a>
</p>

</x-layout>
</html>

