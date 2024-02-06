<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="mt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="shadow-md sm:rounded-lg">
                    <a class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4 "
                        href="{{ route('roles.create') }}">Add user</a>
                    <table class="w-full text-lg items-center text-gray-500">
                        <thead class="text-xl text-gray-700 uppercase">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Roles
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="text-center">
                                    <th class="px-6 py-4 font-medium text-black">
                                        {{ $role->name }}
                                    </th>
                                    <td class="px-6 py-4 ">

                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('roles.edit', $role) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
