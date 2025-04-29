<html>
    <head>
        <title>Users</title>
    </head>
<x-layout>
    <x-header-layout>Users Page</x-header-layout>
    <h1>Hello from Users Page</h1>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                ID
                </th>
                <th scope="col" class="px-6 py-3">
                First Name
                </th>
                <th scope="col" class="px-6 py-3">
                Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
             @foreach ($user as $users)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">


            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $users['id'] }}
                </th>
                <td class="px-6 py-4">
                {{ $users['first_name'] }}
                </td>
                <td class="px-6 py-4">
                {{ $users['last_name'] }}
                </td>
                <td class="px-6 py-4">
                {{ $users['email'] }}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

            </tr>
 @endforeach
        </tbody>
    </table>
</div>

</x-layout>

</html>
