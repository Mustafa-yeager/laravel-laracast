
<html>
    <head>
        <title>Login page</title>
    </head>
<x-layout>
<x-header-layout>Login</x-header-layout>



<form method="POST" action="/login">
    @csrf
  <div class="space-y-12">


    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 ml-20 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-1">





        <div class="sm:col-span-3">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" :value="old('email')" placeholder="Email" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required>
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




      </div>
    </div>


    <div class="mt-5">
        @if($errors->any())

         <ul>
           @foreach ($errors->all() as $error )
            <li class="text-red-500 italic">{{ $error }}</li>
             @endforeach
         </ul>

        @endif
    </div>

  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
  <a href="/home" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
  </div>
</form>



</x-layout>
</html>


<!--
<html>
   <head>
   <link rel="stylesheet" href="style.css">
   </head>
<body class="align">

  <div class="grid">

    <form action="/login" method="POST" class="form login">

      <div class="form__field">
        <label for="login__username"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg><span class="hidden">Email</span></label>
        <input  id="email" type="email" name="email" :value="old('email')" class="form__input" placeholder="Username" required>
        @error('email')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
    </div>

      <div class="form__field">
        <label for="login__password"><svg class="icon">
            <use xlink:href="#icon-lock"></use>
          </svg><span class="hidden">Password</span></label>
        <input id="password" type="password" name="password" class="form__input" placeholder="Password" required>
        @error('password')
            <span class="text-xs text-red-500 italic">{{ $message }}</span>
            @enderror
    </div>

      <div class="form__field">
        <input type="submit" value="Sign In">
      </div>

    </form>

    <p class="text--center">Not a member? <a href="/register">Sign up now</a> <svg class="icon">
        <use xlink:href="#icon-arrow-right"></use>
      </svg></p>

  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>

</body>
</html>
-->
