<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" placeholder="Enter name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                            <label for="email"
                                class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" placeholder="Enter email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                            <label for="password"
                                class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="text" name="password" placeholder="Enter password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 ">
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
