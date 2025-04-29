<html>
    <head>
        <title>Jobs</title>
    </head>
<x-layout>
<x-header-layout>Jobs Page</x-header-layout>
<ul>
    @foreach ($jobs as $job)
     <li>

        <a href="/jobs/{{ $job['id'] }}"><strong> {{ $job['title'] }} </a>

    </li>
    @endforeach
</ul>
</x-layout>
</html>
