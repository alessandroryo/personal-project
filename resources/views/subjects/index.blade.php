<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                @if($report->user_id == Auth::user()->id)
                    <h1 class="text-3xl font-bold text-left">Student Subjects</h1>
                    <div class="my-8 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $report->student_name }}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">School Year: {{ $report->school_year }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Class: {{ $report->student_class }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Number: {{ $report->student_number }}</p>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Subject Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Passing Grade
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Average
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Competence
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Check</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    @if($report->user_id == Auth::user()->id && $subject->report_id == $report->id)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ $subject->subject_name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $subject->passing_grade }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $subject->average() }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $subject->competence($subject) }}
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <a href="{{ route('subjects.show', [$report, $subject]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Check</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('subjects.create', $report) }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add new subject</a>
                @else
                    <h1 class="text-3xl font-bold text-left">Not Found</h1>
                @endif
            </section>
        </div>
    </div>
</x-app-layout>
