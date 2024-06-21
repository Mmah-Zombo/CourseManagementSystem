<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-y-2 border-blue-600">
                <form action="{{ route('createCourse')}}" method="POST" class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    @csrf
                    <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-xl font-bold text-gray-800 leading-7">Course Brief</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Briefly describe the course in the following section.</p>
                
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="course_name" class="block text-lg font-medium leading-6 text-gray-900">Course Name</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                        <input type="text" name="course_name" id="course_name" autocomplete="course_name" :value="old('course_name')" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Software Engineering with Multimedia" required>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="department" class="block text-lg font-medium leading-6 text-gray-900">Department</label>
                                <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                    <input type="text" name="department" id="department" autocomplete="department" :value="old('department')" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="FICT" required>
                                </div>
                                </div>
                            </div>
                
                            <div class="col-span-full">
                                <label for="description" class="block text-lg font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                <textarea id="description" name="description" rows="3" :value="old('description')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" required></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the course.</p>
                            </div>

                            <div class="sm:col-span-4">
                                <label for="fee" class="block text-lg font-medium leading-6 text-gray-900">Fee (NLE)</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                        <input type="number" name="fee" id="fee" autocomplete="fee" :value="old('fee')" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="1500" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-xl font-bold text-gray-800 leading-7">Course Details</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Give more information about the course.</p>
                
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                
                            <div class="sm:col-span-3">
                                <label for="course_level" class="block text-lg font-medium leading-6 text-gray-900">Course Level</label>
                                <div class="mt-2">
                                    <select id="course_level" name="course_level" autocomplete="course_level" :value="old('course_level')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:max-w-xs sm:text-sm sm:leading-6" required>
                                        <option value="phd" selected>PhD</option>
                                        <option value="masters">Masters</option>
                                        <option value="degree">Degree</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="certificate">Certificate</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="detail" class="block text-lg font-medium leading-6 text-gray-900">Course Overview</label>
                                <div class="mt-2">
                                    <textarea id="detail" name="detail" rows="15" :value="old('detail')" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6" required></textarea>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Outline the modules and other details of the course.</p>
                            </div>

                        </div>
                    </div>
                    </div>
                
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/courses" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                        <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </x-app-layout>