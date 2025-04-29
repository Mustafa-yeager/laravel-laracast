<html>
    <head>
        <title>Register page</title>
    </head>
<x-layout>
<x-header-layout>Register</x-header-layout>



<form method="POST" action="/register">
    @csrf
  <div class="space-y-12">


    <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base/7 font-semibold text-gray-900">Create New Account</h2>

      <div class="mt-10 ml-20 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1">

        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First Name</label>
          <div class="mt-2">
            <input type="text" name="first_name" id="first_name" placeholder="first name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('first_name')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
          <div class="mt-2">
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('last_name')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
        </div>
        </div>

        <div class="sm:col-span-3">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" placeholder="Email" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('email')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
          </div>
        </div>


        <div class="sm:col-span-3">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          <div class="mt-2">
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('password')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
          </div>
        </div>


        <div class="sm:col-span-3">
          <label for="password_confirm" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
          <div class="mt-2">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password "  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
            @error('password_confirmation')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
          </div>
        </div>

      </div>
    </div>

    <!--


    <div class="mt-5">
        @if($errors->any())

         <ul>
           @foreach ($errors->all() as $error )
            <li class="text-red-500 italic">{{ $error }}</li>
             @endforeach
         </ul>

        @endif
    </div>
-->
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
  <a href="/home" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
  </div>
</form>



</x-layout>
</html>
