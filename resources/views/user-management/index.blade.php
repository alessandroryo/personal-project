<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="w-full">
                <div>
                    <div class="flex flex-col justify-center items-center mb-10">
                        <h2 class="text-5xl font-bold text-black">{{ __('User Management') }}</h2>
                    </div>

                    <div class="mb-8">
                        <div class="flex flex-row items-center justify-center">
                            <a href="{{ route('user-management') }}" class="flex justify-center items-center px-4 py-2 mr-2 bg-sky-400 rounded-md font-medium text-white hover:bg-tertiary-hover focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                Refresh
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                  </svg>
                            </a>
                            <form method="GET" action="{{ route('user-management') }}">
                                <div class="input-group relative flex flex-row items-stretch w-full">
                                    <input type="text" name="search" class="form-control relative flex-auto min-w-0 block w-full px-4 py-2 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <button class="btn px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-r shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="submit" id="button-addon2">
                                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="bg-sky-400 border-t border-grey-300 p-4 text-white font-medium rounded-t-lg">
                        Admin
                    </div>
                    @foreach($users as $user)
                    @if($user->is_admin)
                    <div class="bg-white shadow">
                        <ul role="list">
                            <li class="border-t border-gray-200">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md font-medium text-tertiary-color truncate mr-10">{{ $user->name }}</p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    Admin
                                                </p>
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500">
                                                <span class="font-medium mr-2">Email:</span>
                                                {{ $user->email }}
                                            </p>
                                        </div>
                                        <form method="POST" action="/user-management/{{ $user->id }}">
                                            @csrf
                                            @method('PUT')

                                            <button type="submit" class="w-full flex justify-center items-center px-2 py-1 border border-tertiary-color rounded-md font-semibold text-sm text-tertiary-color hover:bg-blue-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-2">
                                                {{ __('Change Role') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endif
                    @endforeach
                    <div class="bg-sky-400 border-t border-grey-300 p-4 text-white font-medium">
                        {{ __('User') }}
                    </div>
                    @foreach($users as $user)
                    @if(!$user->is_admin)
                    <div class="bg-white shadow rounded-b-lg">
                        <ul role="list">
                            <li class="border-t border-gray-200">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-md font-medium text-tertiary-color truncate mr-10">{{ $user->name }}</p>
                                        <div class="ml-2 flex-shrink-0 flex">
                                                <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                    User
                                                </p>
                                        </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm text-gray-500">
                                                <span class="font-medium mr-2">Email:</span>
                                                {{ $user->email }}
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <form method="POST" action="/user-management/{{ $user->id }}" class="mr-2">
                                                @csrf
                                                @method('PUT')

                                                <button type="submit" class="w-full flex justify-center items-center px-2 py-1 border border-tertiary-color rounded-md font-semibold text-sm text-tertiary-color hover:bg-blue-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-2">
                                                    Change Role
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('password.email') }}">
                                                @csrf
                                                <input
                                                        id="email"
                                                        class="hidden"
                                                        type="email"
                                                        name="email"
                                                        value="{{ $user->email }}">
                                                <button type="submit" class="w-full flex justify-center items-center px-2 py-1 border border-tertiary-color rounded-md font-semibold text-sm text-tertiary-color hover:bg-blue-100 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-2">
                                                    Send password reset e-mail
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    @endif
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
