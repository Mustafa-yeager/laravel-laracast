<html>
    <head>
        <title>Celebrity Price</title>
    </head>
<x-layout>
<x-header-layout>Celebrity Page</x-header-layout>

    <h2 class="font-bold py-4 text-gray-500">Hello from Celebrity Page</h2>


<div class="space-y-4">



        <div>
          @foreach ($job_list as $list)
           <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-grey">

          <a href="/job_list/{{ $list['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg ">


             <div class="font-bold text-blue-500 text-sm">
                {{ $list->contact2->name }}
             </div>

             <div >
             {{ $list['title']}}
            </div>


            </a>


            </label>
            @endforeach

</div>
<div>
    {{ $job_list->links() }}
</div>

</x-layout>
</html>

