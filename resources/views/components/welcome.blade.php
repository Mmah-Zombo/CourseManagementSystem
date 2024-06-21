<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <p class="font-bold text-2xl">WELCOME</p>

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to your University Dashbord
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        The home of creativity and acedemic excellece.
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    @if (Auth::User()->admin)

    @else
    <a href="/my-courses" class="hover:bg-blue-200 w-full h-full  p-6 lg:p-8">
        <p class="font-bold text-lg">{{ Auth::user()->enrollments()->count()}}</p>
        <p>Your Courses</p>
    </a>
    @endif

</div>
