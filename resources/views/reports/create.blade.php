<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                <h1 class="text-3xl font-bold text-left mb-10">Create new report</h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="bg-red-200 px-6 py-4 my-1 rounded-md text-sm flex items-center mx-auto w-fit xl:w-2/4">
                        <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                            <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                        </svg>
                        <span class="text-red-800">{{ $error }}</span>
                    </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route("reports.store") }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <div>
                        <label for="student_name">Student Name</label>
                        <input type="text" name="student_name" id="student_name" required>
                    </div>
                    <div>
                        <label for="student_name">Student Class</label>
                        <input type="text" name="student_class" id="student_class" required>
                    </div>
                    <div>
                        <label for="student_name">Student Number</label>
                        <input type="number" name="student_number" id="student_number" required min="0" max="35">
                    </div>
                    <div>
                        <label for="student_name">School Year</label>
                        <input type="number" name="school_year" id="school_year" required min="1900" max="2099" step="1">
                    </div>
                    <div>
                        <button type="submit" class="mt-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Create a new report
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
