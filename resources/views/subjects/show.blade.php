<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                @if($report->user_id == Auth::user()->id && $subject->report_id == $report->id)
                    <h1 class="text-3xl font-bold text-left">Subject Assessments</h1>
                    <h2>Subject Name: {{ $subject->subject_name }}</h2>
                    <h2>Passing Grade: {{ $subject->passing_grade }}</h2>
                    <h3 class="my-4 font-semibold">Assessment Lists:</h3>
                    <table class="mb-10 w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Test Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Score
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Predicate
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subject->assessments as $assessment)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $assessment->test_type }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $assessment->score }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $assessment->predicate() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('assessments.create', [$report, $subject]) }}" class="mt-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add new assessment</a>
                    <a href="{{ route('subjects.index', [$report]) }}" class="mt-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Back to subjects page</a>
                @else
                    <h1 class="text-3xl font-bold text-left">Not Found</h1>
                @endif
            </section>
        </div>
    </div>
</x-app-layout>
