@extends('layouts.admin_layout')

@section('admin_content') <div class="animate-fade-down mx-full w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-3xl font-poppin pt-3 pb-5">Staff List</p>
    </div>
    <div class="flex flex-wrap flex-col">


        <div class="m-8 bg-white rounded-lg shadow-md m-3">

            <div class="flex flex-wrap flex-row mx-4">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <div class="md:flex md:justify-between">
                        <div>
                            <a href="{{route('admin.createUser')}}"
                                class="py-2 px-4 my-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add
                                new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                                    class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                    </path>
                                </svg></a>
                        </div>

                        <div>

                            <form action="{{ route('admin.staffList') }}" method="GET"
                                class="dataTable-top flex flex-row justify-between m-5">

                                <div class="flex justify-center p-3" id="bulk-actions">

                                </div>
                                <div class="flex justify-center p-3">
                                    <input id="input_anything" name="input_anything"
                                        class="dataTable-input bg-gray-200 px-3 py-2 rounded-md"
                                        value="{{ $input_anything }}" placeholder="Search..." type="text">
                                </div>

                                <div class="flex justify-center p-3">
                                    <button type
                                        class="p-2 border w-full rounded-md bg-gray-800 text-white">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="w-full mb-6 overflow-x-auto">
                        <form action="">




                            <div
                                class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table
                                        class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dataTable-table">
                                        <thead>
                                            <tr class="bg-gray-100">

                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-5">name</a>
                                                </th>
                                                <th class="hidden lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-5">FirstName </a>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-10">LastName</p>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-10">Role</p>
                                                </th>
                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-5">PhoneNumber</a>
                                                </th>
                                                <th data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-5">Email</a>
                                                </th>

                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-10">Actions</p>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($staffs as $staff)
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <div class="flex flex-wrap flex-row items-center m-3 text-xs">

                                                            <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                                {{$staff->name}}

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center hidden lg:table-cell">{{$staff->first_name}}
                                                </td>
                                                <td class="text-center">{{$staff->last_name}}</td>
                                                <td class="text-center hidden lg:table-cell">
                                                    {{$staff->role}}</td>
                                                <td class="text-center hidden lg:table-cell">
                                                    {{$staff->phone_number}}</td>
                                                <td class="text-center hidden lg:table-cell">
                                                    {{$staff->email}}</td>
                                                <td class="text-center">
                                                    <a href="javascript:;"
                                                        class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500"
                                                        title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500"
                                                        title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                    <div class="grid grid-cols-6 -space-x-px h-10 text-base m-5">
                                        <div></div>
                                        <div></div>
                                        <div class="flex items-center col-span-3">
                                            {{ $staffs->appends([
                                                    'input_anything' => $input_anything,
                                                ])->links() }}
                                        </div>

                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection