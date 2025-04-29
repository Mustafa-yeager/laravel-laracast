<html>
    <head>
        <title>Contact</title>
    </head>
<x-layout>
<x-header-layout>Contact Page</x-header-layout>

    <h2>Hello from Contact Page</h2>


<div class="grid gap-2 mb-2 md:grid-cols-2">
        <div>
            <label for="first_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black"> Name</label>
        </div>
        <div>
            <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black">Phone Number</label>
        </div>

        <div>
          @foreach ($contacts as $contact)
           <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-grey">

    <a href="/contact/{{ $contact['id']}}">

     {{ $contact['name']}}

    </a>


            </label>
            @endforeach
        </div>
        <div>
            @foreach ($contacts as $contact)
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-grey">


    <a href="/contact/{{ $contact['id']}}">

     {{ $contact['phone'] }}

    </a>

            </label>
              @endforeach
        </div>
</div>

</x-layout>
</html>

