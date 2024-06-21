<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
              <p class="text-4xl font-bold">{{ $this_course->course_name }}</p>
            </div>
            <div class="min-h-[28rem] grid grid-cols-2 grid-flow-col gap-4">
                <div class="w-full h-fit flex flex-col items-start justify-between">
                    <p class="w-fit px-2 py-1 bg-gray-200 text-md rounded">{{ $this_course->department }}</p>
                    
                    <p class="w-full text-lg mt-6">{{ $this_course->description }}</p>

                    <div class="w-full mt-6">
                        <button class="py-3 px-4 mr-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            <p>NLE {{ $this_course->fee}}</p>
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                            </svg>    
                        </button>
                        @if (Auth::User()->admin)
                        @else
                        <a href="/course-enroll/{{ $this_course->id }}" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                            Enroll Now
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                        </a>
                        @endif
                    </div>
                    
                </div>
                <div class="w-full h-96 hover:h-[28rem] transition-all duration-700">
                  <x-course-info-image />
                </div>
            </div>

            <div class="bg-white rounded-md border border-gray-200 p-4 mt-10">
                <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    <span class="size-1.5 inline-block rounded-full bg-blue-800"></span>
                    {{ $this_course->course_level}}
                </span>
                <div class="mt-8">
                    <p class="text-lg font-bold text-gray-800">Course Overview</p>
                    <p class="mt-2 text-lg">{!! $this_course->detail !!}</p>
                </div>
            </div>

            @if (Auth::User()->admin)
                <div class="mt-8 w-full flex items-center justify-end">
                    <a href="/delete-course/{{ $this_course->id }}" class="py-3 px-4 mr-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                        <p>DELETE COURSE</p>
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                            
                    </a>
                </div>
            @endif

        </div>
    </div>
  </x-app-layout>