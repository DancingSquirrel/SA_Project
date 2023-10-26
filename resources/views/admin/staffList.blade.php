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
                            <a href="{{route('admin.createUser')}}" class="py-2 px-4 my-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Add
                                new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                    </path>
                                </svg></a>
                        </div>

                        <div>

                            <form action="{{ route('admin.staffList') }}" method="GET" class="dataTable-top flex flex-row justify-between m-5">

                                <div class="flex justify-center p-3" id="bulk-actions">

                                </div>
                                <div class="flex justify-center p-3">
                                    <input id="input_anything" name="input_anything" class="dataTable-input bg-gray-200 px-3 py-2 rounded-md" value="{{ $input_anything }}" placeholder="Search..." type="text">
                                </div>

                                <div class="flex justify-center p-3">
                                    <button type class="p-2 border w-full rounded-md bg-gray-800 text-white">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    
                    <div class="w-full mb-6 overflow-x-auto">
                        <form action="">




                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-container">
                                    <table class="table-sorter table-bordered w-full ltr:text-left rtl:text-right text-gray-600 dataTable-table">
                                        <thead>
                                            <tr class="bg-gray-100">

                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-2">Name</a>
                                                </th>
                                                <th class="hidden text-center lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-2">FirstName </a>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-2">LastName</p>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-2">Role</p>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-2">PhoneNumber</a>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-2">Email</a>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter mx-4">Status</a>
                                                </th>

                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter mx-5">Actions</p>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($staffs as $staff)
                                            <tr>
                                                <td class="text-center">
                                                    
                                                        <div class="flex flex-wrap flex-row items-center m-3 text-xs">

                                                            <div class="leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                                {{$staff->name}}

                                                            </div>
                                                        </div>
                                                    
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">{{$staff->first_name}}
                                                </td>
                                                <td class="text-center text-xs">{{$staff->last_name}}</td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{$staff->role}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{$staff->phone_number}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{$staff->email}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    @if($staff->status =='online')
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full w-full">{{$staff->status}}</span>
                                                    @else
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-rose-700 bg-rose-100 rounded-full w-full">{{$staff->status}}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center text-xs">
                                                    @if($staff->name != Auth::user()->name)
                                                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                            </path>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                    @endif

                                                    @if($staff->name != Auth::user()->name)
                                                    @if($staff->status == 'online')
                                                    <a href="{{ route('admin.staffList.banned', ['user_id' => $staff->id]) }}" class="inline-block ltr:mr-2 rtl:ml-2 hover:bg-rose-500 hover:rounded-full" title="Banned">
                                                        <svg fill="#000000" width="20px" height="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296 296" xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <g>
                                                                    <path d="M148,0C66.393,0,0,66.393,0,148s66.393,148,148,148s148-66.393,148-148S229.607,0,148,0z M148,266 c-65.065,0-118-52.935-118-118c0-25.468,8.208-50.862,24.67-72.118L220.117,241.33C200.214,256.745,175.174,266,148,266z M241.33,220.117L75.883,54.67C95.786,39.255,120.825,30,148,30c65.065,0,118,52.935,118,118 C266,173.469,257.792,198.861,241.33,220.117z"></path>
                                                                    <path d="M148,239.215c11.371,0,22.254-2.087,32.293-5.889L62.674,115.706c-3.802,10.039-5.889,20.922-5.889,32.293 C56.785,198.376,97.623,239.215,148,239.215z"></path>
                                                                    <path d="M148,56.785c-11.371,0-22.254,2.087-32.293,5.889l117.619,117.62c3.802-10.039,5.889-20.922,5.889-32.293 C239.215,97.623,198.377,56.785,148,56.785z"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    @else
                                                    <a href="{{ route('admin.staffList.unbanned', ['user_id' => $staff->id]) }}" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500 hover:bg-green-500 hover:rounded-full" title="Edit">
                                                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <title></title>
                                                                <g>
                                                                    <path d="M58.3945,32.1563,42.9961,50.625l-5.3906-6.4629a5.995,5.995,0,1,0-9.211,7.6758l9.9961,12a5.9914,5.9914,0,0,0,9.211.0059l20.0039-24a5.9988,5.9988,0,1,0-9.211-7.6875Z"></path>
                                                                    <path d="M48,0A48,48,0,1,0,96,48,48.0512,48.0512,0,0,0,48,0Zm0,84A36,36,0,1,1,84,48,36.0393,36.0393,0,0,1,48,84Z"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    @endif
                                                    @endif
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

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this staff?</h3>
                <a data-modal-hide="popup-modal" href="{{ route('admin.staffList.delete', ['user_id' => $staff->id]) }}"class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </a>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection