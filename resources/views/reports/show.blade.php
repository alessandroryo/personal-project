<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                @if($report->user_id == Auth::user()->id)
                    <h1 class="text-3xl font-bold text-left">Student Report Summary</h1>
                    <div class="my-8 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $report->student_name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">School Year: {{ $report->school_year }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Class: {{ $report->student_class }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Number: {{ $report->student_number }}</p>
                        <a href="{{ route('subjects.index', $report) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Check all subjects
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                @else
                    <h1 class="text-3xl font-bold text-left">Not Found</h1>
                @endif
            </section>
        </div>
    </div>
</x-app-layout>
