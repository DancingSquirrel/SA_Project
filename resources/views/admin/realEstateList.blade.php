@extends('layouts.admin_layout')

@section('admin_content') <div class="animate-fade-down mx-full w-full p-2">
    <div class="flex-shrink max-w-full px-4 w-full">
        <p class="text-3xl font-poppin pt-3 pb-5">RealEstate List</p>
    </div>
    <div class="flex flex-wrap flex-col">


        <div class="m-8 bg-white rounded-lg shadow-md m-3 ">

            <div class="flex flex-wrap flex-row mx-4">
                <div class="flex-shrink max-w-full px-4 w-full">
                    <div class="md:flex md:justify-between">
                        @if(Auth::user()->role == 'admin')
                        <div>
                            <a href="{{route('admin.createRealEstate')}}" class="py-2 px-4 my-3 block lg:inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                                Add new <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ltr:ml-1 rtl:mr-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z">
                                    </path>
                                </svg></a>
                        </div>
                        @else
                        <div></div>
                        @endif

                        <div>
                            @if(session('message'))
                            <h4 class="text-roes-900"> {{session('message') }}</h4>
                            @endif
                            <form action="{{ route('admin.realEstateList') }}" method="GET" class="dataTable-top flex flex-row justify-between m-5">
                                @if(Auth::user()->role == 'staff')
                                <div class="flex justify-center p-3" id="bulk-actions">
                                    <label class="flex flex-wrap flex-row">
                                        <select id="input_id_user" name="input_id_user" class="inline-block leading-5 relative  px-8 py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mx-1 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                                            <option value="">All</option>
                                            <option value="{{Auth::user()->id}}">My List</option>
                                        </select>
                                    </label>
                                </div>
                                @else
                                <div class="flex justify-center p-3" id="bulk-actions">
                                    <label class="flex flex-wrap flex-row">
                                        <select id="input_id_user" name="input_id_user" class="inline-block leading-5 relative  px-8 py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mx-1 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                                            <option value="">All</option>
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </label>
                                </div>
                                @endif
                                <div class="flex justify-center p-3" id="bulk-actions">
                                    <label class="flex flex-wrap flex-row">
                                        <select id="input_status" name="input_status" class="inline-block leading-5 relative  px-8 py-2 ltr:pl-3 ltr:pr-8 rtl:pr-3 rtl:pl-8 mx-1 rounded bg-gray-100 border border-gray-200 overflow-x-auto focus:outline-none focus:border-gray-300 focus:ring-0 select-caret appearance-none">
                                            <option value="">Select status</option>
                                            <option value="public">Public</option>
                                            <option value="private">Private</option>
                                            <option value="in progress">In progress</option>
                                            <option value="complete">Complete</option>
                                        </select>
                                    </label>
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
                                                    <a href="#" class="dataTable-sorter text-xs mx-2">Address</a>
                                                </th>
                                                <th class="text-center hidden lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter text-xs mx-2">Province </a>
                                                </th>
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter text-xs mx-2">Amphoe</p>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter text-xs  mx-5">Price</a>
                                                </th>
                                                <th class="text-center" data-sortable="">
                                                    <a href="#" class="dataTable-sorter text-xs mx-5">Staff</a>
                                                </th>
                                                <th class="text-center hidden lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter text-xs mx-2">ContractExpiresDate</a>
                                                </th>
                                                <th class="text-center hidden lg:table-cell" data-sortable="">
                                                    <a href="#" class="dataTable-sorter text-xs mx-8">Status</a>
                                                </th>
                                                @if(Auth::user()->role == 'admin')
                                                <th class="text-center" data-sortable="false">
                                                    <p class="text-center dataTable-sorter  text-xs mx-5">Actions</p>
                                                </th>
                                                @endif

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($realEstates as $realEstate)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('realEstate', ['realEstate' => $realEstate]) }}">
                                                        <div class="flex flex-wrap flex-row items-center m-3 text-xs">

                                                            <div class="text-center leading-5 flex-1 ltr:ml-2 rtl:mr-2 mb-1">
                                                                {{$realEstate->address}}

                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">{{$realEstate->province}}
                                                </td>
                                                <td class="text-center text-xs">{{$realEstate->amphoe}}</td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{number_format($realEstate->getPrice($realEstate))}}
                                                </td>
                                                @if($realEstate->user()->get()->first() != null)
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{$realEstate->user()->get()->first()->name}}
                                                </td>
                                                @else
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    
                                                </td>
                                                @endif
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    {{$realEstate->agreements()->get()->first()->date_expired}}
                                                </td>
                                                <td class="text-center hidden lg:table-cell text-xs">
                                                    @if($realEstate->status =='public')
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full w-full">{{$realEstate->status}}</span>
                                                    @elseif($realEstate->status =='in progress')
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full w-full">{{$realEstate->status}}</span>
                                                    @elseif($realEstate->status =='complete')
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full w-full">{{$realEstate->status}}</span>
                                                    @else
                                                    <span class="text-sm px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full w-full">{{$realEstate->status}}</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if(Auth::user()->role == 'admin')
                                                    <a href="{{ route('admin.realEstateList.delete', ['realEstate' => $realEstate]) }}" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-red-500" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                            </path>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                            </path>
                                                        </svg>
                                                    </a>

                                                    <a href="{{ route('admin.getViewEditRealEstate', ['realEstate' => $realEstate]) }}" class="inline-block ltr:mr-2 rtl:ml-2 hover:text-green-500" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                                            </path>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                                            </path>
                                                        </svg>
                                                    </a>
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
                                            {{ $realEstates->appends([
                                                    'input_anything' => $input_anything,
                                                    'input_status' => $input_status,
                                                    'input_id_user' => $input_id_user,
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