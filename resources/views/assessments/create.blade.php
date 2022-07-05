<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                <h1>Create Assessment</h1>

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

                <form method="POST" action="{{ route("assessments.store", [$report, $subject]) }}">
                    @csrf
                    <input type="hidden" name="subject_id" value="{{ $subject->id }}">
                    <div>
                        <label for="test_type">Test Type</label>
                        <input type="text" name="test_type" id="test_type" required>
                    </div>
                    <div>
                        <label for="score">Score</label>
                        <input type="number" name="score" id="score" required min="0" max="100">
                    </div>
                    <div>
                        <button type="submit">
                            Create an assessment
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
