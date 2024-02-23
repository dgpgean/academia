@vite('resources/css/app.css')
@vite('resources/js/users.js')


@extends('adminlte::page')

@section('title', 'Treinos')

@section('content_header')
    <h1>Treinos</h1>
    <input id="userStore" type="hidden" value="{{ route('users_store') }}">
@stop

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')

    <!-- component -->
    <section class="  mx-auto ">
        <form>
            <div class="grid grid-cols-1 gap-4 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-black dark:text-gray-200" for="username">Username</label>
                    <input id="username" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="emailAddress">Email Address</label>
                    <input id="emailAddress" type="email"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="password">Password</label>
                    <input id="password" type="password"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="passwordConfirmation">Password Confirmation</label>
                    <input id="passwordConfirmation" type="password"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="passwordConfirmation">Select</label>
                    <select
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option>Surabaya</option>
                        <option>Jakarta</option>
                        <option>Tangerang</option>
                        <option>Bandung</option>
                    </select>
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="passwordConfirmation">Date</label>
                    <input id="date" type="date"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-black dark:text-gray-200" for="passwordConfirmation">Text Area</label>
                    <textarea id="textarea" type="textarea"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-black">
                        Image
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span class="">Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button
                    class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
            </div>
        </form>
    </section>




@stop



@section('js')
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/sweet.js') }}"></script>

@stop
